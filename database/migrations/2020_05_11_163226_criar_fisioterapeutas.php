<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarFisioterapeutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisioterapeutas', function (Blueprint $table) {
            $table->bigIncrements('idFisioterapeutas');
            $table->string('nome', 200);
            $table->date('data_nascimento');
            $table->string('crefito', 50)->unique();
            $table->string('cpf', 50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fisioterapeutas');
    }
}
