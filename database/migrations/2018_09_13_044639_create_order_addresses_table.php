<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('email',255)->nullable(false);
            $table->string('phone_number',20)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('city',100)->nullable(false);
            $table->string('ward',100)->nullable(false);
            $table->string('district',100)->nullable(false);
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
        Schema::dropIfExists('order_addresses');
    }
}
