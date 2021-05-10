<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrumpRoundCard extends Model
{
    use HasFactory;

    public function playerCard(): BelongsTo
    {
        return $this->belongsTo(TrumpGamePlayerCard::class);
    }

    public function round(): BelongsTo
    {
        return $this->belongsTo(TrumpRound::class);
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(TrumpPlayer::class);
    }
}
