<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('estatuses')->insert(array(
        array(
            'Estatus' => 'En Proceso'
        ),
        array(
            'Estatus' => 'Aceptado'
        ),
        array(
            'Estatus' => 'Cancelado'
        ),

    ));
    }
}
