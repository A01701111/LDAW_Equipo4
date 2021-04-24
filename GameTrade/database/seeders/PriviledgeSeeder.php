<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriviledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priviledges')->insert(array(
            array(
                'Nombre' => 'Registra Titulo'
            ),
            array(
                'Nombre' => 'Borrar titulo'
            ),
            array(
                'Nombre' => 'Consulta lista de titulos'
            ),
            array(
                'Nombre' => 'Solicita registro de titulo'
            ),
            array(
                'Nombre' => 'Inicia Seción'
            ),
            array(
                'Nombre' => 'Cierra Seción'
            ),

        ));
    }
}
