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
//        Schema::create('password_resets', function (Blueprint $table) {
//            $table->string('email')->index();
//            $table->string('token')->index();
//            $table->timestamp('created_at');
//        });

=======
        // Schema::create('password_resets', function (Blueprint $table) {
        //     $table->string('email')->index();
        //     $table->string('token')->index();
        //     $table->timestamp('created_at');
        // });
>>>>>>> e9110a84b26bc1dc3dec40fe319b93739434a651
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

<<<<<<< HEAD
        Schema::drop('password_resets');
=======
        // Schema::drop('password_resets');
>>>>>>> e9110a84b26bc1dc3dec40fe319b93739434a651

    }
}
