<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        // Schema::create('password_resets', function (Blueprint $table) {
        //     $table->string('email')->index();
        //     $table->string('token')->index();
        //     $table->timestamp('created_at');
        // });
=======
//        Schema::create('password_resets', function (Blueprint $table) {
//            $table->string('email')->index();
//            $table->string('token')->index();
//            $table->timestamp('created_at');
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
<<<<<<< HEAD
        // Schema::drop('password_resets');
=======
        Schema::drop('password_resets');
>>>>>>> 2ca7525e5383b0122b86bd669b09114c9b74c9c9
    }
}
