<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sales', function (Blueprint $table) {
            $table->unsignedBigInteger('Produto_idProduto')->unsigned();
            $table->unsignedBigInteger('Venda_idVenda')->unsigned();
            $table->foreign('Produto_idProduto')->references('idProduto')->on('products');
            $table->foreign('Venda_idVenda')->references('idVenda')->on('sales');
            $table->string('quantidade')->nullable();
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
        Schema::dropIfExists('item_sales');
    }
}
