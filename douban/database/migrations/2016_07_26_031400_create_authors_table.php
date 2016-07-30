<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
//        Schema::create('authors', function (Blueprint $table) {
//            $table->increments('id');
//            $table->text('name')->comment('作者名');
//            $table->text('abstract')->comment('作者简介');
//            $table->tinyInteger('status')->comment('状态 0禁止,1显示')->default(0);
//            $table->timestamps();
//        });
=======
        // Schema::create('authors', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->text('name')->comment('作者名');
        //     $table->text('abstract')->comment('作者简介');
        //     $table->tinyInteger('status')->comment('状态 0禁止,1显示')->default(0);
        //     $table->timestamps();
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
        // Schema::drop('authors');
    }
}
