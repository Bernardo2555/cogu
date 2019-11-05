<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('idEndereco', true)->unsigned();
            $table->string('CEP');
            $table->string('rua', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 30)->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
