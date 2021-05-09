<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrumpSet extends Model
{
    use HasFactory;

    protected $with = ['cards', 'statTypes'];

    public function cards()
    {
        return $this->hasMany(TrumpCard::class, 'trump_set_id', 'id');
    }


    public function statTypes()
    {
        return $this->hasManyThrough(TrumpStatType::class, TrumpSetStatType::class, 'trump_set_id', 'id', 'id', 'trump_stat_type_id');
    }
}
