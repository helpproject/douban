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

<<<<<<< HEAD
=======
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password', 60);
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

>>>>>>> e9110a84b26bc1dc3dec40fe319b93739434a651
//        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('username');
//            $table->string('email')->unique();
//            $table->string('password', 60);
//            $table->rememberToken();
//            $table->timestamps();
//        });

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
