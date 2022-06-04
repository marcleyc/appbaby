<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nome', 200);
            $table->date('data');
            $table->string('morada');
            $table->date('nascimento');
            $table->string('indicacao', 30);
            $table->integer('qtdsessoes');
            $table->string('escolaridade', 50);
            $table->string('telefone', 20);
            $table->string('email', 200);
            $table->string('nif', 9);
            $table->integer('familiar');
            $table->string('queixa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
