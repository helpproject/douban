@extends('layout.admin')

@section('title','收货地址添加页面')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>收货地址添加页面</span>
    </div>
    <div class="mws-panel-body no-padding">
        @if (count($errors) > 0)
        <div class="mws-form-message error">
            错误信息
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/admin/order/insert" method="post" class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">用户姓名</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{old('name')}}" name="name">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">用户ID</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{old('user_id')}}" name="user_id">
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">手机号</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{old('phone')}}" name="phone">
                    </div>
                </div>
                
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">省、市、区</label>
                    <div class="mws-form-item">
                        <select id="province" name="sheng" class="form-control col-md-3"  style="width:30%">
                          <option>省</option>
                        </select>
                        <select id="city" name="shi" class="form-control col-md-3" style="width:30%">
                          <option>市</option>
                        </select>
                        <select id="xian" name="xian" class="form-control col-md-3" style="width:30%">
                          <option>区</option>
                        </select>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">邮政编码</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{old('youbian')}}" name="youbian">
                    </div>
                </div>
               

                 <div class="mws-form-row">
                    <label class="mws-form-label">详细地址</label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" class="small" name="detail">{{old('detail')}}</textarea>
                    </div>
                </div>

            </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="submit" class="btn btn-danger" value="添加">
                <!-- 传隐藏id -->
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
    </div>      
</div>
@endsection

@section('myJs')
<meta name="csrf-token" content="{{ csrf_token() }}">

<script type="text/javascript">
   
    //页面加载完毕后要获取省份信息
    function loadProv()
    {
        $.get('/getProvince',{},function(data){
            $.each(data,function(i,v){
                $('<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#province');
            });
        },'json')
    }
    loadProv();

    // 绑定省份的chang事件
    $('#province').change(function() {
        $('#city').empty();
        $('#xian').empty();
        //获取当前选中的省份的id
        var id = $(this).val();
        //发送ajax获取当前省份下的市区信息
        $.get('/getCity',{province_id:id},function(data){
            $.each(data,function(i,v){
                $('<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#city');
            });
        },'json');
    });

    // 绑定市区的chang事件
    $('#city').change(function() {
        $('#xian').empty();
        //获取当前选中的省份的id
        var id = $(this).val();
        //发送ajax获取当前省份下的市区信息
        $.get('/getCity',{province_id:id},function(data){
            $.each(data,function(i,v){
                $('<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#xian');
            });
        },'json');
    });

    // 设置ajax请求
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
</script>
@endsection