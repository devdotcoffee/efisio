<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarUsuarioFisio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_fisio', function (Blueprint $table) {
            $table->bigIncrements('idUsuarioFisio');
            $table->string('crefito', 50)->nullable();
            $table->string('senha', 100);
            $table->unsignedBigInteger('idFisioterapeuta');
            $table->foreign('idFisioterapeuta')
                ->references('idFisioterapeuta')
                ->on('fisioterapeutas');
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
        Schema::dropIfExists('usuario_fisio');
    }
}
