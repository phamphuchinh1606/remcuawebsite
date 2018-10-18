<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('email',255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->string('phone_number',20)->nullable(false);
            $table->string('sex',20)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('city',100)->nullable(false);
            $table->string('ward',100)->nullable(false);
            $table->string('district',100)->nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
