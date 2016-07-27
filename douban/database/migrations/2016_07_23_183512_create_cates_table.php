<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('cates', function (Blueprint $table) {
        //     $table->increments('id')->comment('主键自增id');
        //     $table->string('name')->comment('名称');
        //     $table->integer('pid')->comment('父级分类id');
        //     $table->string('path')->comment('路径');
        //     $table->tinyInteger('status')->comment('状态 1为成功 0为失败');
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
        // Schema::drop('cates');
    }
}
