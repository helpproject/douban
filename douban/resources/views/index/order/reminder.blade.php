@extends('layout.index')

@section('title','支付成功')

@section('content')
<style>
	.submit_cart {
	    color: #fff;
	    background: #94c886;
	    width: 75px;
	    border: 0;
	    padding: 5px 0;
	    margin: auto;
	    cursor: pointer;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	}
	body #dingdan{
		margin: auto 300px;
	}
</style>
	<div id="dingdan">
		<h2>商品购买成功 <a href="/ordercart"> 查看订单详情&gt;&gt;&gt;&gt;</a></h2>
		
	</div>
@endsection