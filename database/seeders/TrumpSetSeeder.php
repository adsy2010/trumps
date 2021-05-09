<?php

namespace Database\Seeders;

use App\Models\TrumpSet;
use Illuminate\Database\Seeder;

class TrumpSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TrumpSet::create([
            'name' => 'F1 Trumps',
            'stats_amount' => 3,
            'max_players' => 4
        ]);
    }
}
