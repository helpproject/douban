<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('messages', function (Blueprint $table) {
             $table->increments('id');
             $table->string('text')->connect('内容');
             $table->integer('sender_id')->connect('发送者id');
             $table->integer('receiver_id')->connect('接收id');
             $table->tinyInteger('status')->comment('状态0下架1上架')->default(0);
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
         Schema::drop('messages');
    }
}
