<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Rol_PriviledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol_priviledges')->insert(array(
            array(
                'ID_Rol' => '1',//rol 1->admin
                'ID_Privilegio'=>'1',
            ),
            array(
                'ID_Rol' => '1',//rol 1->admin
                'ID_Privilegio'=>'2',
            ),
            array(
                'ID_Rol' => '1',//rol 1->admin
                'ID_Privilegio'=>'3',
            ),
            array(
                'ID_Rol' => '2',//rol 1->admin
                'ID_Privilegio'=>'4',
            ),
            array(
                'ID_Rol' => '2',//rol 1->admin
                'ID_Privilegio'=>'5',
            ),
            array(
                'ID_Rol' => '2',//rol 1->admin
                'ID_Privilegio'=>'6',
            ),

        ));
    }
}
