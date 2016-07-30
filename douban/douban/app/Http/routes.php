<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Event::listen('illuminate.query',function($query){
	// var_dump($query);
});

Route::get('/', function(){
	return view('welcome');
});

Route::get('admin/','AdminController@index');

//评论的添加路由
Route::controller('/admin/comment','CommentController');


	//分类管理
	Route::controller('/admin/cate','CateController');
	//用户管理
	Route::controller('/admin/user', 'UserController');
	//关注管理
	Route::controller('/admin/attention', 'AttentionController');
	//标签管理
	Route::controller('/admin/tag', 'TagController');

	//标签管理
	Route::controller('/admin/tag', 'TagController');


