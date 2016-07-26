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
        // Schema::create('authors', function (Blueprint $table) {
        //     $table->increments('id')->comment('主键自增id');
        //     $table->string('name')->comment('作者名称');
        //     $table->integer('book_id')->comment('图书id');
        //     $table->string('abstract')->comment('作者简介');
        //     $table->tinyInteger('status')->comment('状态 0为下架 1为上架')->default(0);
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
        // Schema::drop('authors');
    }
}
