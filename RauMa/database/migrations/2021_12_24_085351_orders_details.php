<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
           $table->increments('order_details_id');
            $table->integer('order_id');
           $table->integer('customer_id');
            $table->integer('product_id'); 
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('customer_id')->references('id')->on('customer');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
