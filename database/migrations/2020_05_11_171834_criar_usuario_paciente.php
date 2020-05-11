<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarUsuarioPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_paciente', function (Blueprint $table) {
            $table->bigIncrements('idUsuarioPaciente');
            $table->string('cpf', 30)->nullable();
            $table->string('senha', 100);
            $table->unsignedBigInteger('idPaciente');
            $table->foreign('idPaciente')
                ->references('idPaciente')
                ->on('pacientes');
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
        Schema::dropIfExists('usuario_paciente');
    }
}
