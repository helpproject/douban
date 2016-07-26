@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>图书修改页面</span>
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
        <form action="/admin/book/update" method="post" class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">图书名</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->title}}" name="title">
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">图书分类</label>
                    <div class="mws-form-item">
                        <select class="small" name="cate_id">
                        <option value="0">请选择</option>
                        <option value="1">男装</option>
                    </select>
                    </div>
                </div>

                <div class="mws-form-item">
                    
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">出版社</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->press}}" name="press">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">出版日期</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->pressdate}}" name="pressdate">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">页数</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->pagination}}" name="pagination">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">ISBN(国际标准书号)</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->ISBN}}" name="ISBN">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">价格</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->price}}" name="price">
                    </div>
                </div>

                 <div class="mws-form-row">
                    <label class="mws-form-label">内容简介</label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" class="small" name="intro">{{$info->intro}}</textarea>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">作者简介</label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" class="small" name="author">{{$info->author}}</textarea>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">目录</label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" class="small" name="catalog">{{$info->catalog}}</textarea>
                    </div>
                </div>
    
                <div class="mws-form-row">
                    <label class="mws-form-label">图书封面</label>
                    <div class="mws-form-item" style="width:455px">
                        <input type="file" class="small" name="img">
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$info->id}}">
                <input type="submit" class="btn btn-danger" value="添加">
                <!-- 传隐藏id -->
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
    </div>      
</div>
@endsection