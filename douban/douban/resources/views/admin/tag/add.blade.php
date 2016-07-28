@extends('layout.admin')

@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>用户添加</span>
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
            <form action="/admin/tag/insert" method="post" class="mws-form" enctype="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标签</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="tag" >
                        </div>
                    </div>


                </div>
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">用户id</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="user_id" >
                        </div>
                    </div>


                </div>

              <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">图书id</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="book_id">
                        </div>
                    </div>
                </div>


                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-danger" value="Submit">
                    <input type="reset" class="btn " value="Reset">
                </div>
            </form>
        </div>
    </div>
@endsection