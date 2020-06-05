<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioFisioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_fisio')->insert([
            'crefito'           => '444-GG',
            'permissao'         => 'Administrador',
            'password'          => Hash::make('123'),
            'idFisioterapeuta'  => 1
        ]);
    }
}
