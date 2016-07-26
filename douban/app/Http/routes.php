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

Route::get('/', function () {
    return view('welcome');
});

//后台登录页面
Route::get('/admin/login','AdminController@login');
Route::post('/admin/login','AdminController@doLogin');

Route::group(['middleware'=>'login'],function(){
	//后台首页
	Route::get('/admin','AdminController@index');
	//用户管理
	Route::controller('/admin/user', 'UserController');
	//分类管理
	Route::controller('/admin/cate','CateController');
	//作者管理
	Route::controller('/admin/author','AuthorController');
	//关注管理
	Route::controller('/admin/attention', 'AttentionController');
	//标签管理
	Route::controller('/admin/tag', 'TagController');
});