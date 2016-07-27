@extends('layout.admin')

@section('title','作者添加页面')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>作者添加页面</span>
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
        <form action="/admin/author/insert" method="post" class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">作者姓名</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{old('name')}}" name="name">
                    </div>
                </div>
                
                
                 <div class="mws-form-row">
                    <label class="mws-form-label">作者简介</label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" class="small" name="abstract">{{old('abstract')}}</textarea>
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