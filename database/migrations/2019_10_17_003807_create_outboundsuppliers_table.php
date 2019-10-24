<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutboundsuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outboundsuppliers', function (Blueprint $table) {
            $table->unsignedInteger('entrada_saidas_idES')->unsined();
            $table->unsignedInteger('fornecedor_idFornecedor')-> unsined();
            $table->foreign('entrada_saidas_idES')->references('idES')->on('entradassaida');
            $table->foreign('fornecedor_idFornecedor')->references('idFornecedor')->on('fornecedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outboundsuppliers');
    }
}
