@extends('layout.admin')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>评论添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	@if(count($errors)>0)
    	<div class="mws-form-message error">
    		错误信息
    		<ul>
    			@foreach($errors->all()as$error)
    			<li>{{$error}}</li>
    			@endforeach
    		</ul>
    	</div>
    	@endif
    	<form action="/admin/comment/insert" method="post" class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户id</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" value="{{old('user_id')}}" name="user_id">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">书籍id</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" value="{{old('book_id')}}" name="book_id">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户父级id</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="pid">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">内容</label>
    				<div class="mws-form-item">
    					<textarea name="content" class="small" id="" cols="30" rows="10"></textarea>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
    			<input type="submit" class="btn btn-danger" value="添加">
    			<input type="reset" class="btn " value="重置">
    		</div>
    	</form>
    </div>    	
</div>
@endsection