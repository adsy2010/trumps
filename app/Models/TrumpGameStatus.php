<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TrumpGameStatus
 * @package App\Models
 * @mixin Builder
 */
class TrumpGameStatus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const LOBBY = 1;
    const IN_PROGRESS = 2;
    const COMPLETE = 3;
}
