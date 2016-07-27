<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('books', function (Blueprint $table) {
             $table->increments('id')->comment('主键自增id');
             $table->string('title')->comment('图书的名称');
             $table->string('press')->comment('出版社');
             $table->string('img')->comment('图片');
             $table->string('pressdate')->comment('出版日期');
             $table->string('pagination')->comment('页数');
             $table->decimal('price',10,2)->comment('图书的价格');
             $table->integer('cate_id')->comment('分类id');
             $table->text('intro')->comment('内容简介');
             $table->text('catalog')->comment('目录');
             $table->integer('ISBN')->comment('国际标准书号');
             $table->tinyInteger('status')->comment('状态 0为下架 1为上架')->default(0);
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
        // Schema::drop('books');
    }
}
