<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class TrumpRound
 * @package App\Models
 * @mixin Builder
 */
class TrumpRound extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['winner_id', 'trump_game_id', 'round_number'];

    public function winner(): HasOne
    {
        return $this->hasOne(TrumpPlayer::class);
    }

    public function game(): HasOne
    {
        return $this->hasOne(TrumpGame::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(TrumpRoundCard::class);
    }

    public function selectedStat(): HasOne
    {
        return $this->hasOne(TrumpStatType::class);
    }
}
