<?php

namespace Database\Seeders;

use App\Models\TrumpGameStatus;
use Illuminate\Database\Seeder;

class TrumpGameStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Lobby',
            'In progress',
            'Complete'
        ];

        foreach ($names as $name) {
            TrumpGameStatus::create(['name' => $name]);
        }
    }
}
