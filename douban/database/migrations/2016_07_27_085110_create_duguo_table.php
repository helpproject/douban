<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuguoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readbooks', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('book_id')->comment('书籍id');
        $table->integer('user_id')->comment('用户id');
        $table->text('content')->comment('评论内容');
        $table->integer('status')->comment('状态 1在读 2想读 3读过');
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
        Schema::drop('readbooks');
        
    }
}
