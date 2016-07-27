<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePingfensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('pingfens', function (Blueprint $table) {
        // $table->increments('id');
        // $table->integer('book_id')->comment('书籍id');
        // $table->integer('user_id')->comment('用户id');
        // $table->integer('score')->comment('分数');
        // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('pingfens');
    }
}
