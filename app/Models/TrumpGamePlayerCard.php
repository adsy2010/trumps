<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrumpGamePlayerCard extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['trump_card_id','trump_game_id','trump_player_id'];

    public function card()
    {
        return $this->belongsTo(TrumpCard::class);
    }

    public function player()
    {
        return $this->belongsTo(TrumpPlayer::class);
    }

    public function game()
    {
        return $this->belongsTo(TrumpGame::class);
    }
}
