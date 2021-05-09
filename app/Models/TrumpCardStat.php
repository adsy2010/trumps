<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrumpCardStat extends Model
{
    use HasFactory;

    protected $with = ['statType'];

    public function statType()
    {
        return $this->hasOne(TrumpStatType::class, 'id', 'trump_stat_type_id');
    }
}
