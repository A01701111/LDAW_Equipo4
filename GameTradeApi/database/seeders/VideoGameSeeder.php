<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Videogame;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videogame::factory()->count(50)->create();
    }
}
