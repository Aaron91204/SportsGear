<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderTable extends Migration
{

   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) 
        {
            $table->increments('id')->index();
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('quantity');

            $table->unique(['id', 'order_id'], 'composite_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_order');

    }
}
