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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password', 60);
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
=======
//        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->string('password', 60);
//            $table->rememberToken();
//            $table->timestamps();
//        });
>>>>>>> 2ca7525e5383b0122b86bd669b09114c9b74c9c9
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
