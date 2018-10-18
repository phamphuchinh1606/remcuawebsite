<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_code',50)->nullable(false);
            $table->integer('user_id');
            $table->dateTime('order_date')->nullable(false);
            $table->bigInteger('total_product_money')->nullable(false);
            $table->string('note',1000)->nullable(false);
            $table->string('discount_code',20)->nullable(false);
            $table->bigInteger('sale_of_money')->nullable(false);
            $table->bigInteger('ship_money')->nullable(false);
            $table->integer('tax_percent')->nullable(false);
            $table->bigInteger('tax_money')->nullable(false);
            $table->bigInteger('total_amount')->nullable(false);
            $table->bigInteger('payment_amount')->nullable(false);
            $table->integer('status_order')->nullable(false);
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
        Schema::dropIfExists('orders');
    }
}
