<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name',255);
            $table->string('product_code',100);
            $table->integer('vendor_id')->nullable(true);
            $table->integer('product_type_id')->nullable(true);
            $table->bigInteger('product_price')->nullable(true);
            $table->bigInteger('product_cost_price')->nullable(true);
            $table->bigInteger('product_compare_price')->nullable(true);
            $table->integer('product_sale_percent')->nullable(true);
            $table->string('product_description',1000)->nullable(true);
            $table->text('product_content')->nullable(true);
            $table->string('product_image',255)->nullable(true);
            $table->bigInteger('product_qty')->nullable(true);
            $table->bigInteger('qty_sale_order')->default(0)->nullable(true);
            $table->string('slug',255)->nullable(true);
            $table->integer('is_public')->default(0);
            $table->integer('is_delete')->default(0);
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
        Schema::dropIfExists('products');
    }
}
