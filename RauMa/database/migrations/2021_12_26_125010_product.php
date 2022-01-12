<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('name',150);
            $table->string('image',150); 
            $table->integer('price');
            $table->string('descreption');
            $table->integer('category_id');
            $table->tinyInteger('status')->nullable()->default(1);
                 
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
