<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('comment', function (Blueprint $table) {
        //         $table->increments('id')->comment('主键自增id');
        //         $table->text('content')->comment('文章的内容');
        //         $table->integer('book_id')->comment('书籍的id');
        //         $table->integer('user_id')->comment('用户的id');
        //         $table->integer('pid')->comment('用户父级的id');
        //         $table->integer('status')->default(0)->comment('状态');
        //         $table->timestamps();
        //     });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('comment');
    }
}
