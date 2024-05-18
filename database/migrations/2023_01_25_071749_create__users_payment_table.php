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
        Schema::create('users_payment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('User_id')->unsigned();
            $table->foreign('User_id')->references('id')->on('Users');
            $table->string('payment_type');
            $table->string('account_no');
            $table->date('expiry');
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
        Schema::dropIfExists('users_payment');
    }
};
