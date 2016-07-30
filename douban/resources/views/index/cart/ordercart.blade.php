@extends('layout.index')

@section('title','订单详情')

@section('content')
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="table-responsive bottommargin">
				<form action="/cart/confirm" method="post">
				<table class="table cart">
					<thead>
						<tr>
							<th class="cart-product-remove">&nbsp;</th>
							<th class="cart-product-thumbnail">&nbsp;</th>
							<th class="cart-product-thumbnail">&nbsp;</th>
							<th class="cart-product-name">商品</th>
							<th class="cart-product-price">单价</th>
							<th class="cart-product-quantity">数量</th>
							<th class="cart-product-subtotal">总价</th>
						</tr>
					</thead>
					<tbody>
					@foreach($goods as $k=>$v)
						<tr class="cart_item">

							<td class="cart-product-remove">
								<input type="checkbox" name="goods[{{$v['id']}}][id]" value="{{$v['id']}}">
							</td>
							<td class="cart-product-remove">
								<a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
							</td>

					
							<td class="cart-product-name">
								<a href="/goods/{{$v['id']}}">{{$v->title}}</a>
							</td>

							<td class="cart-product-price">
								$<span class="amount">{{$v->price}}*</span>
							</td>

							<td class="cart-product-quantity">
								<div class="quantity clearfix">
									<input type="button" value="-" class="minus">
									<input type="text" name="goods[{{$v['id']}}][num]" value="{{$v['num']}}" class="qty">
									<input type="button" value="+" class="plus" max="{{$v['info']['kucun']}}">
								</div>
							</td>

							<td class="cart-product-subtotal">
								$<span class="total">{{$v['num'] * $v['info']['price']}}</span>
							</td>
						</tr>
					@endforeach
						<tr class="cart_item">
							<td colspan="6">
								<div class="row clearfix">							
									<div class="col-md-2 col-xs-2 nopadding pull-right">
										{{csrf_field()}}
										<button class="button button-3d notopmargin fright">点击结算</button>
									</div>
									<div class="col-md-2 col-xs-2 nopadding pull-right">
									<p>
    									<span class="tb-promo-price" style="width: auto; position: static; top: -2px; vertical-align: baseline; padding: 0px; font-size: 26px; font-weight: 700; font-family: Tahoma, Arial, Helvetica, sans-serif; color: rgb(255, 68, 0); overflow: hidden; line-height: 26px; display: inline; margin-right: 5px; background-color: rgb(255, 242, 232);">
	    									<span class="tb-rmb" style="font-family: arial; font-weight: 400; margin-right: 4px;">¥ </span>
	    									<span id="total" class="tb-rmb-num" style="font-family: verdana, arial;"> 0</span>
    									</span>
									</p>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				</form>
			</div>
		</div>

	</div>

</section>
@endsection

@section('myJs')
<script>
	$(function(){
		$('.minus').click(function(){
			//获取当前的值
			var num = parseInt($(this).next().val());
			--num;
			$(this).next().val(Math.max(1,num));
			checkSmallTotal($(this).parents('tr'));
			checkTotal();
		});

		$('.plus').click(function(){
			//获取当前的值
			var num = parseInt($(this).prev().val());
			++num;
			//
			$(this).prev().val(Math.min(num,$(this).attr('max')));
			checkSmallTotal($(this).parents('tr'));
			checkTotal();
		});

		//移出取消选中的值
		$('input[type=checkbox]').change(function(){
			checkTotal();
		})

		// 计算小结
		function checkSmallTotal(tr)
		{	
			//获取当前的单价
			var price =  parseFloat(tr.find('.amount').html());
			//获取当前的数量
			var num = tr.find('.qty').val();
			//计算小结的总价
			var total = price * num;
			tr.find('.total').html(total);
			return total;
		}

		// 计算总价
		function checkTotal()
		{
			//
			var total = 0;
			//遍历当前选中的小结
			$('input[type=checkbox]:checked').each(function(){
				total += checkSmallTotal($(this).parents('tr'));
			})
			//改变总价
			$('#total').html(total);
		}
	})
</script>
@endsection