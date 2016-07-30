<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->comment('主键自增id');
            $table->string('num')->comment('订单号');
            $table->string('user_id')->comment('用户的id');
            $table->decimal('total')->comment('总价');
            $table->string('address_id')->comment('收货地址id');
            $table->string('paytype')->comment('支付方式');
            $table->string('status')->comment('订单状态');

            $table->timestamps();
        });

//        Schema::create('orders', function (Blueprint $table) {
//            $table->increments('id')->comment('主键自增id');
//            $table->string('name')->comment('姓名');
//            $table->char('phone',15)->comment('手机号');
//            $table->integer('sheng')->comment('省id');
//            $table->integer('shi')->comment('市区id');
//            $table->integer('xian')->comment('县id');
//            $table->integer('youbian')->comment('邮编');
//            $table->integer('user_id')->comment('用户id');
//            $table->string('detail')->comment('详细地址');
//            $table->tinyInteger('status')->comment('状态 0为不默认 1为默认')->default(0);
//            $table->timestamps();
//        });
>>>>>>> a1d21c9ec392fc0ac96ef53741e43252793677d4
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('orders');
    }
}
