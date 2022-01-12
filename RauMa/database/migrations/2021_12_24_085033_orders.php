<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('customer_id');
            $table->integer('shipping_id');
            $table->integer('payment_id');
            $table->string('order_total');
            $table->tinyInteger('order_status',0);
            $table->timestamps();
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('shipping_id')->references('shipping_id')->on('customer'); 
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
        Schema::dropIfExists('order');
    }
}
