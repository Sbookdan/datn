<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay', function (Blueprint $table) {
            $table->id();
            $table->integer('pay_user_id')->unsigned();
            $table->integer('cart_product_id')->unsigned();
            $table->integer('cart_shopping_fee_id')->unsigned();
            $table->integer('pay_payment_methods_id')->unsigned();
            $table->string('number')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('pay');
    }
}
