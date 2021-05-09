<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class TrumpPlayer
 * @package App\Models
 *  @mixin Builder
 */
class TrumpPlayer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['name'];

    public function hostedGames(): HasMany
    {
        return $this->hasMany(TrumpGame::class);
    }

    public function games(): HasManyThrough
    {
        return $this->hasManyThrough(TrumpGame::class, TrumpGamePlayer::class);
    }


}
