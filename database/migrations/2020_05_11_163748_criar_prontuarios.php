<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarProntuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->bigIncrements('idProntuarios');
            $table->date('data');
            $table->longText('diagnostico_clinico')->nullable();
            $table->longText('historia_clinica')->nullable();
            $table->longText('queixa_principal')->nullable();
            $table->longText('habitos_vida')->nullable();
            $table->longText('hma')->nullable();
            $table->longText('hmp')->nullable();
            $table->longText('antecedente_pessoal')->nullable();
            $table->longText('antecedente_familiar')->nullable();
            $table->longText('tratamento_realizado')->nullable();
            $table->string('apresentacao_paciente', 100)->nullable();
            $table->longText('exame_complementar')->nullable();
            $table->longText('medicamento')->nullable();
            $table->longText('cirurgia')->nullable();
            $table->string('inspecao', 100)->nullable();
            $table->longText('semiologia')->nullable();
            $table->longText('teste_especifico')->nullable();
            $table->integer('intensidade_dor')->nullable();
            $table->longText('objetivo_tratamento')->nullable();
            $table->longText('recurso_terapeutico')->nullable();
            $table->longText('plano_terapeutico')->nullable();
            $table->longText('diagnostico_fisioterapeutico')->nullable();
            $table->unsignedBigInteger('idFisioterapeuta');
            $table->foreign('idFisioterapeuta')
                ->references('idFisioterapeuta')
                ->on('fisioterapeutas');
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
        Schema::dropIfExists('prontuarios');
    }
}
