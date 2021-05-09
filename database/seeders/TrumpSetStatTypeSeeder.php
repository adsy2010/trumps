<?php

namespace Database\Seeders;

use App\Models\TrumpSetStatType;
use Illuminate\Database\Seeder;

class TrumpSetStatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['f1_trumps' =>
            ['trump_set_id'=>1,'trump_stat_type_id'=>1],
            ['trump_set_id'=>1,'trump_stat_type_id'=>2],
            ['trump_set_id'=>1,'trump_stat_type_id'=>3],
        ];


        foreach ($types as $type) {
            TrumpSetStatType::create($type);
        }
    }
}
