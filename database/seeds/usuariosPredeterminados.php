<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariosPredeterminados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'prueba 1',
            'email' => 'prueba1@prueba1.cl',
            'password' => bcrypt('probando'),
        ]);
        DB::table('users')->insert([
            'name' => 'prueba 2',
            'email' => 'prueba2@prueba2.cl',
            'password' => bcrypt('probando'),
        ]);
        DB::table('users')->insert([
            'name' => 'prueba 3',
            'email' => 'prueba3@prueba3.cl',
            'password' => bcrypt('probando'),
        ]);
        DB::table('users')->insert([
            'name' => 'prueba 4',
            'email' => 'prueba4@prueba4.cl',
            'password' => bcrypt('probando'),
        ]);
        DB::table('users')->insert([
            'name' => 'prueba 5',
            'email' => 'prueba5@prueba5.cl',
            'password' => bcrypt('probando'),
        ]);
    }
}
