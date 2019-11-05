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
            $table->unsignedBigInteger('entrada_saidas_idES')->unsined();
            $table->unsignedBigInteger('fornecedor_idFornecedor')-> unsined();
            $table->foreign('entrada_saidas_idES')->references('idES')->on('inouts');
            $table->foreign('fornecedor_idFornecedor')->references('idFornecedor')->on('providers');
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
