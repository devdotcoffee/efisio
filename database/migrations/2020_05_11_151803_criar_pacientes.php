<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('idPaciente');
            $table->string('nome', 200);
            $table->string('cpf', 30)->unique();
            $table->date('data_nascimento');
            $table->string('telefone');
            $table->string('sexo', 20);
            $table->string('cidade', 200);
            $table->string('bairro', 200);
            $table->string('email', 200);
            $table->string('naturalidade', 200)->nullable();
            $table->string('endereco_comercial', 250)->nullable();
            $table->string('endereco_residencial', 250)->nullable();
            $table->string('profissao', 100)->nullable();
            $table->string('estado_civil')->nullable();
            $table->date('data_cadastro');
            $table->softDeletes();
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
        Schema::dropIfExists('pacientes');
    }
}
