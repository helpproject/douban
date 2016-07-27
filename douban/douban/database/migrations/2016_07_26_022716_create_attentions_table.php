<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('attentions', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('username')->connect('用户账号');
        //     $table->string('attention_name')->index('关注id');
        //     $table->tinyInteger('status')->comment('状态0下架1上架')->default(1);
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
        // Schema::drop('attentions');
    }
}
