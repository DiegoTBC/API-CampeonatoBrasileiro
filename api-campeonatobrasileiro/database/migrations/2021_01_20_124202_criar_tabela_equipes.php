<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaEquipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->foreign('id_campeonato')->references('id')->on('campeonatos');
            $table->string('posicao')->default(0);
            $table->string('nome')->unique();
            $table->integer('pontos')->default(0);
            $table->integer('jogos')->default(0);
            $table->integer('vitorias')->default(0);
            $table->integer('empates')->default(0);
            $table->integer('derrotas')->default(0);
            $table->integer('gols_pro')->default(0);
            $table->integer('gols_contra')->default(0);
            $table->integer('saldo_gols')->default(0);
            $table->float('aproveitamento')->default(0);
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
        Schema::table('equipes', function (Blueprint $table) {
            Schema::dropIfExists('equipes');
        });
    }
}
