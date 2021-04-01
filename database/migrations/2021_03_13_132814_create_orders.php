<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('carts_id');
            $table->unsignedBigInteger('products_id');
            $table->binary('status');
            $table->integer('item_discount');
            $table->string('shipping');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('carts_id')->references('id')->on('carts');
            $table->foreign('products_id')->references('id')->on('products');
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
