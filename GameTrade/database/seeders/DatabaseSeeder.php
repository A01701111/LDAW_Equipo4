<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PriviledgeSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(Rol_PriviledgeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(EstatusSeeder::class);
        $this->call(VideogameSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(OfertaSeeder::class);
    }
}
