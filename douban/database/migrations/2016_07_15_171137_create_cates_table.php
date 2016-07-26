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
        //     $table->string('name')->comment('分类名称');
        //     $table->integer('pid')->comment('父级id');
        //     $table->string('path')->comment('分类路径');
        //     $table->tinyInteger('status')->comment('状态 0为下架,1为上架')->default(1);
        //     $table->engine = 'InnoDB';
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
