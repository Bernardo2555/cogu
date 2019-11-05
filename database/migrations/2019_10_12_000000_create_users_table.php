<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUsuario', true)->unsigned();
            $table->string('CPF')->unique('CPF');
            $table->unsignedBigInteger('enderecoId')->unsined();
            $table->foreign('enderecoId')->references('idEndereco')->on('addresses');
            $table->string('dataNascimento')->nullable();
            $table->string('email')->unique('email');
            $table->string('nome')->nullable();
            $table->string('RG')->nullable();
            $table->string('password')->nullable();
            $table->string('telefone')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
