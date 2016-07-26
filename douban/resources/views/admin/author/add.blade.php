@extends('layout.admin')

@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>添加作者</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/author/insert" method="post">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">作者</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="name">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">作者简介</label>
    				<div class="mws-form-item">
    					<textarea rows="" cols="" class="large" name="abstract"></textarea>
    				</div>
    			</div>
    			
    			<div class="mws-form-row">
    				<label class="mws-form-label">状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="1" checked="checked"> <label>开启</label></li>
                            <li><input type="radio" name="status" value="0"> <label>禁用</label></li>
                        </ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
    			<input type="submit" value="添加" class="btn btn-danger">
    			<input type="reset" value="重置" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>
@endsection