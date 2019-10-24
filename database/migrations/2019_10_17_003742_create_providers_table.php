<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->integer('idFornecedor', true)->unsigned();
            $table->integer('enderecoId')->unsigned();
            $table->foreign('enderecoId')->references('idEndereco')->on('addresses');
            $table->string('nomeFantasia', 100)->nullable();
            $table->string('nomeVendedor', 100)->nullable();
            $table->string('contato', 50)->nullable();
            $table->string('CNPJ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
