@extends('layout.index')

@section('title','购书单')

@section('content')
<style>
	.submit_cart {
	    color: #fff;
	    background: #94c886;
	    width: 75px;
	    border: 0;
	    padding: 5px 0;
	   	cursor: pointer;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	}
	#content .addr-cur .inner {
		padding: 10px;
		height: 85px;
	    background-image: url(//img.alicdn.com/tps/i1/T1fuaCXxFdXXbjLKQ7-237-106.png);
	}

	.container .addr {
	    display: inline-block;
	    vertical-align: top;
	    position: relative;
	    width: 237px;
	    height: 110px;
	    margin: 0 14px 14px 0;
	    color: #666;
	    cursor: pointer;
	    font-size: 12px;
	}

	.container .addr .addr-hd {
	    width: 100%;
	    border-bottom: 1px solid #f2f2f2;
	    padding: 0 0 5px;
	    margin-bottom: 5px;
	    height: 25px;
	    line-height: 18px;
	    overflow: hidden;
	    white-space: nowrap;
	    text-overflow: ellipsis;
	}
	.form-group{
		padding: 10px;
	}
	.submit_cart {
	    color: #fff;
	    background: #94c886;
	    width: 75px;
	    border: 0;
	    padding: 5px 0;
	    cursor: pointer;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	}
	#wrapper #content {
	     min-height: 0px; 
	}
</style>
<div id="wrapper">
  <h1>购书单</h1>
  <p class="clearfix">
    <span class="pl ll">去
      <a href="https://book.douban.com/mine?status=wish">想读列表</a>添加图书</span></p>
  <section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<h3>收货地址</h3>
			
			<div id="addresses">
				<div id="addressBak" style="display:none" data-spm-click="gostr=/tmalljy;locaid=d005001002001" data-is4="true" data-id="6178096893" class="addr addr-cur addr-def address-option-binded" tabindex="1">
				  <div class="inner" aid="">
				    <div class="addr-hd" title="收)">
				      <span class="prov"></span>
				      <span class="city"></span>
				      <span>（</span>
				      <span class="name"></span>
				      <span>收）</span></div>
				    <div title="" class="addr-bd">
				      <span class="dist"></span>
				      <span class="j_4tip"></span>
				      <span class="street"></span><br>
				      <span class="phone"></span>
				      <span class="last">&nbsp;</span></div>
				    <div class="addr-toolbar">
				      <a title="修改地址" href="javascript:void(0);" data-spm-click="gostr=/tmalljy;locaid=d005001003001" class="modify abtn" data-mm="addr_edit" data-mark="2.21" data-id="6178096893" data-clk="buy-order/mod/addrMaker:showUpdate">修改</a></div>
				  </div>
				  <ins class="curmarker"></ins>
				  <div class="floater"></div>
				  <div class="option">
				    <div class="container"></div>
				  </div>
				</div>
				@foreach($addresses as $key=>$value)
				<div data-spm-click="gostr=/tmalljy;locaid=d005001002001" data-is4="true" data-id="6178096893" id="addr-6178096893" class="addr addr-cur addr-def address-option-binded" tabindex="1">
				  <div class="inner" aid="{{$value->id}}">
				    <div class="addr-hd" title="收)">
				      <span class="prov">{{getName($value->sheng)}}</span>
				      <span class="city">{{getName($value->shi)}}</span>
				      <span>（</span>
				      <span class="name">{{$value->name}}</span>
				      <span>收）</span></div>
				    <div title="" class="addr-bd">
				      <span class="dist">{{getName($value->xian)}}</span>
				      <span class="j_4tip"></span>
				      <span class="street">{{$value->detail}}</span><br>
				      <span class="phone">{{$value->phone}}</span>
				      <span class="last">&nbsp;</span></div>
				    <div class="addr-toolbar">
				      <a title="修改地址" href="javascript:void(0);" data-spm-click="gostr=/tmalljy;locaid=d005001003001" class="modify abtn" data-mm="addr_edit" data-mark="2.21" data-id="6178096893" data-clk="buy-order/mod/addrMaker:showUpdate">修改</a></div>
				  </div>
				  <ins class="curmarker"></ins>
				  <div class="floater"></div>
				  <div class="option">
				    <div class="container"></div>
				  </div>
				</div>
				@endforeach
			</div>
			<div class="clearfix"></div>
			<button class="btn btn-primary pull-right site">点击添加地址</button>
		</div>
	</div>
  </section>
  <div id="data-list-header" class="data_list" style="width: 950px;">
    <table>
        <tr>
          <th style="width: 36px;"></th>
          <th class="book_title" style="width: 120px;">
            <a id="select_none" href="javascript:void(0)">书名</a></th>
          <th class="sort_tabs" style="width: 84px;">原价</th>
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1002" id="sort_price_1002">
              <span>亚马逊↓</span></a>
          </th>
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1069" id="sort_price_1069">
              <span>北发↓</span></a>
          </th>s
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1006" id="sort_price_1006">
              <span>China-pub↓</span></a>
          </th>
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1073" id="sort_price_1073">
              <span>博库↓</span></a>
          </th>
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1001" id="sort_price_1001">
              <span>当当↓</span></a>
          </th>
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1072" id="sort_price_1072">
              <span>京东↓</span></a>
          </th>
          <th class="sort_tabs" style="width: 84px;">
            <a href="javascript:void(0)" class="choose_vendor" rel="1074" id="sort_price_1074">
              <span>澜瑞外文↓</span></a>
          </th>

          <th class="num_tabs" style="width: 84px;">数量</th>
          <th class="sort_tabs" style="width: 84px;">小结</th>
          <th class="sort_tabs" style="width: 84px;">操作</th>
        </tr>
    </table>
  </div>
  <form action="/Order/create" method="post">
  <table id="data_list" class="data_list">
    @foreach($books as $k=>$v)
    <tbody id="tbody">
      <tr id="{{$v->id}}" class="lightyellow_bg current">
        <td>
          <input class="cbx" type="checkbox"></td>
        <td class="book_title" style="width: 130px;">
          <a target="blank" href="/subject/{{$v->id}}">{{$v->title}}</a></td>
        <td class="amount" style="width: 84px;">
          {{$v->price}}</td>
	    <td class="color-gray" style="width: 84px;">-</td>
	    <td class="color-gray" style="width: 84px;">-</td>
	    <td class="color-gray" style="width: 84px;">-</td>
	    <td class="color-gray" style="width: 84px;">-</td>
        <td class="color-gray" style="width: 84px;">-</td>
        <td class="color-gray" style="width: 84px;">-</td>
        <td class="color-gray" style="width: 84px;">-</td>
        <td>
        <div class="quantity clearfix" style="width: 84px;">
        	<input type="hidden" name="cart[{{$v['id']}}][id]" value="{{$v->id}}">
			<input type="button" value="-" class="minus" style="padding:1.3px">
			<input type="text" name="cart[{{$v['id']}}][num]"  value="1" class="qty" style="width:20px">
			<input type="button" value="+" class="plus" style="padding:1px">
		</div>
          <!-- <input name="" class="w20" id="n25806360" value="1"> -->
          <span class="abbr" style="display: inline;">
            <br></span>
        </td>
        <td class="total" style="width: 84px;">{{$v->price}}</td>
        <td class="color-gray" style="width: 84px;">
        	<a class="delete" id="{{$v->id}}" href="javascript:;">删除</a>
        </td>
      </tr>
    </tbody>
    @endforeach
    <tfoot>
      <tr>
        <td colspan="3">
        	<input type="radio" name="paytype" value="支付宝">支付宝
        	<input type="radio" name="paytype" value="财付通">财付通
        	<input type="radio" name="paytype" value="hipay">hipay

        </td>

        <td>
        	总价:
          <span id="total"> 0</span></td>
          <td>
        	
          <span id="total_down"></span></td>
        <td colspan="9" valign="top">
          {{csrf_field()}}

          <input type="hidden" name="addresse_id" value="">
          <input type="hidden" name="total" value="">
          <input class="submit_cart" type="submit" value="点击购买"></td>
      </tr>
    </form>
    </tfoot>
  </table>
  <br>
  <span class="pl rr">购书单有什么问题？如果价格或者缺货问题请注明书名，最好有链接。
    <a href="https://help.douban.com/help/ask?type=12">来这里反馈意见吧。</a></span>
  <br>
</div>
<div class="modal fade pop_win" id="myModal" style="display: none; background:#FFF7E8; width:600px;margin:20px; left: 50%; top: 50%; margin-left: -280px; margin-top: -150px; visibility: visible; z-index: 9999;">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">添加收货地址</h4>
                    </div>
                    <div class="modal-body">
                    	<form id="addAddress" name="addAddress">
						  <div class="form-group">
						    <label for="exampleInputEmail1">收货人:</label>
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="收货人">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">手机号</label>
						    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="手机号">
						  </div>
						  <div class="form-group">
						  	<label for="exampleInputPassword1">省市县</label>
						  	<select id="province" name="sheng" class="form-contro1" style="width:29%">
						  		<option value="">请选择</option>
						  	</select>
						  	<select id="city" name="shi" class="form-contro1" style="width:29%">
						  		<option value="">请选择</option>
						  	</select>
						  	<select id="xian" name="xian" class="form-contro1" style="width:29%">
						  		<option value="">请选择</option>
						  	</select>
						  </div>
						  <div class="form-group">
						  	<label for="exampleInputPassword1">详细地址</label>
						  	<textarea class="form-control" name="detail" id="" cols="30" rows="3"></textarea>
						  </div>
						  <div class="form-group">
						  	<label for="exampleInputPassword1">邮政编码</label>
						  	<textarea class="form-control" name="youbian" id="" cols="30" rows="3"></textarea>
						  </div>
						  <div class="form-group">
						  	<label for="exampleInputPassword1">默认收货地址</label>
						  	<input type="checkbox" value="1" name="isdefault" id="exampleInputPassword1">
						  </div>
						</form>
                    </div>
                    <div class="modal-footer" style="float:right">
                        <button type="button" class="btn btn-primary submit_cart" id="addAddress2">添加地址</button>
                        <button type="button" class="btn default submit_cart" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
	$(function(){
		$('.site').click(function(){
			$('.pop_win').show();
		})
		//页面加载完毕获取省份信息
		function loadProv()
		{
			$.get('/getProvince',{}, function(data){
				// 遍历获取到的省份信息
				$.each(data,function(i,v){
					//添加选定的省份信息
					$('<<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#province');
				})
			},'json')
		}
		loadProv();

		//绑定省份的chang事件
		$('#province').change(function(){
			//清空之前选定的数据
			$('#city').empty();
			//获取当前的选定的省份id
			var id = $(this).val();

			$.get('/getCity', {province_id: id}, function(data){
				$.each(data,function(i,v){
					$('<<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#city');
				})
			},'json');
		});

		//绑定市区的chang事件
		$('#province').change(function(){
			//清空之前选定的数据
			$('#city').empty();
			$('#xian').empty();
			//获取当前的选定的省份id
			var id = $(this).val();

			$.get('/getCity', {province_id: id}, function(data){
				$.each(data,function(i,v){
					$('<<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#city');
				})
			},'json');
		});

		$('#city').change(function(){
			//清空之前选定的数据
			$('#xian').empty();
			//获取当前的选定的省份id
			var id = $(this).val();

			$.get('/getCity', {province_id: id}, function(data){
				$.each(data,function(i,v){
					$('<<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#xian');
				})
			},'json');
		})

		// 设置ajax请求 csrf_field
		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		});
		//绑定单击事件 提交表单内容	
		$('#addAddress2').click(function(){
			//获取表单中的所有的内容
			// alert(222);
			var from = $('#addAddress').serialize(); //获取url参数字符串
			// console.log(from);
			//发送ajax
			$.post('/insetAddress', from, function(data){
				if (data == '1') {
					$('#myModal').css('display','none');
					//获取地址的副本元素
					var newAdd = $('#addressBak').clone(true);
					//修改元素
					newAdd.find('.prov').html($('#province option:selected').html());
					newAdd.find('.city').html($('#city option:selected').html());
					newAdd.find('.name').html($('input[name=name]').val());
					newAdd.find('.street').html($('input[name=detail]').val());
					newAdd.find('.phone').html($('input[name=phone]').val());
					newAdd.find('.dist').html($('#xian option:selected').html());

					newAdd.prependTo('#addresses').show();

				};
			});
		});


		// 给地址绑定事件
		$('.inner').hover(function(){
			$(this).addClass('default');
		},function(){
			$(this).removeClass('default');
		}).click(function(){
			$('.inner').removeClass('cur');
			$(this).addClass('cur');
			//获取当前的地址id
			var aid = $(this).attr('aid');
			//修改隐藏域的值
			$('input[name=addresse_id]').val(aid);

		})

		$('.default').click(function(){
			$('#myModal').css('display','none');
		});
	})
</script>
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
			$(this).prev().val(num);
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
			//获取当前的总价
			$('input[name=total]').val(total);
			//改变总价
			$('#total').html(total);
		};

		$('.delete').click(function(){
			var id = $(this).attr('id');
			$.get('/getDelete',{id,id},function(data){
				if (data == "0") {
					$(this).parents('tr').remove();
				}else{

				}
			})
		})
	})
</script>
@endsection