<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class TrumpCard
 * @package App\Models
 * @mixin Builder
 */
class TrumpCard extends Model
{
    use HasFactory;

    protected $with = ['stats'];

    /**
     * @return HasMany
     */
    public function stats(): HasMany
    {
        return $this->hasMany(TrumpCardStat::class);
    }
}
