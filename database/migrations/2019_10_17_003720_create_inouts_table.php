<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inouts', function (Blueprint $table) {
            $table->bigIncrements('idES')->unsigned();
            $table->unsignedBigInteger('produtoId')->unsined();
            $table->foreign('produtoId')->references('idProduto')->on('products');
            $table->unsignedBigInteger('funcionarioId')->unsined();
            $table->foreign('funcionarioId')->references('idUsuario')->on('users');
            $table->string('validade')->nullable();
            $table->string('quantidade')->nullable();
            $table->string('dataColheita')->nullable();
            $table->string('dataES')->nullable();
            $table->string('tipo', 10)->nullable();
            $table->string('dataDesidratado')->nullable();
            $table->integer('lote')->nullable();
            $table->string('localArmazenamento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inouts');
    }
}
