<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarEvolucao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolucao', function (Blueprint $table) {
            $table->bigIncrements('idEvolucao');
            $table->date('data');
            $table->longText('descricao');
            $table->unsignedBigInteger('idFisioterapeuta');
            $table->unsignedBigInteger('idProntuario');
            $table->foreign('idFisioterapeuta')
                ->references('idFisioterapeuta')
                ->on('fisioterapeutas');
            $table->foreign('idProntuario')
                ->references('idProntuario')
                ->on('prontuarios');
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
        Schema::dropIfExists('evolucao');
    }
}
