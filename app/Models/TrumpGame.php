<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrumpGame extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['trump_set_id', 'trump_player_id', 'password', 'max_players', 'winner_id'];

    protected $with = ['winner', 'players', 'set', 'status'];

    public function winner(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TrumpPlayer::class, 'id', 'winner_id');
    }

    public function set(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TrumpSet::class, 'id', 'trump_set_id');
    }

    public function players(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(TrumpPlayer::class, TrumpGamePlayer::class, 'trump_game_id', 'id', 'id', 'trump_player_id');
    }
}
