<?php

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
       // Schema::create('users', function (Blueprint $table) {
       //     $table->increments('id');
       //     $table->string('username');
       //     $table->string('nickname');
       //     $table->string('img');
       //     $table->string('city');
       //     $table->integer('phone');
       //     $table->string('email')->unique();
       //     $table->string('password', 60);
       //     $table->tinyInteger('status');
       //     $table->rememberToken();
       //     $table->timestamps();
       // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('users');
    }
}
