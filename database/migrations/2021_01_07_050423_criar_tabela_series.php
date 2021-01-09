<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaSeries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Cria um tabela no banco de dados denominada "series"
        Schema::create('series', function (Blueprint $table) {
            // Cria a coluna de chave primaria
            $table->bigIncrements('id');
            // Cria uma coluna do tipo "string", chamada "nome"
            $table->string('nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Deleta a tabela "series"
        Schema::drop('series');
    }
}
