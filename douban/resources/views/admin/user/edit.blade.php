@extends('layout.admin')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>用户添加页面</span>
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
            <div class="mws-panel-body no-padding">
                <form action="/admin/user/update" method="post" class="mws-form" enctype="multipart/form-data">
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label">账号</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="username" value="{{$info->username}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">昵称</label>
                            <div class="mws-form-item">
                                <input type="text" class="small" name="nickname" value="{{$info->nickname}}">
                            </div>
                        </div>

                        <div class="mws-form-row">
                            <label class="mws-form-label">邮箱</label>
                            <div class="mws-form-item">
                                <input type="text" class="medium" value="{{$info->email}}" name="email" >
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">手机号</label>
                            <div class="mws-form-item">
                                <input type="text" class="medium" name="phone"value="{{$info->phone}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">城市</label>
                            <div class="mws-form-item">
                                <input type="text" class="medium" name="city"value="{{$info->city}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">头像</label>
                            <div class="mws-form-item">
                                <img src="{{$info->profile}}" width="100" alt="">
                                <input type="file" class="small" name="profile">
                            </div>
                        </div>
                    </div>

                    <div class="mws-button-row">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$info->id}}">
                        <input type="submit" class="btn btn-danger" value="修改">
                        <input type="reset" class="btn " value="重置">
                    </div>
                </form>
            </div>
        </div>
@endsection