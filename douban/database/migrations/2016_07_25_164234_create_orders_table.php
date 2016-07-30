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
