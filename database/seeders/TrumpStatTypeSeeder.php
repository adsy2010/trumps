<?php

namespace Database\Seeders;

use App\Models\TrumpStatType;
use Illuminate\Database\Seeder;

class TrumpStatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'World Champion titles',
            'Wins',
            'Podiums'
        ];

        foreach ($names as $name) {
            TrumpStatType::create(['name' => $name]);
        }

    }
}
