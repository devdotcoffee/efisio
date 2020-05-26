<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FisioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fisioterapeutas')->insert([
            'nome'              => 'Erick Oliveira',
            'crefito'           => '444-GG',
            'cpf'               => '197.125.667-65',
            'data_nascimento'   => '2000-03-22'
        ]);
    }
}
