<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
        $table->id();
        $table->string('order_item_id');
         

        $table->integer('order_id')->unsigned();  
        $table->integer('product_id')->unsigned();

        $table->string('quality');
        $table->string('price');
        $table->string('size');

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
        Schema::dropIfExists('order_item');
    }
};
