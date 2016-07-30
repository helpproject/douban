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
Route::get('/admin/login','AdminController@alogin');
Route::post('/admin/login','AdminController@adoLogin');

/*******  前台 ********/
	//分类页面
	Route::get('/cate','CateController@index');
	Route::get('/cate/hot','CateController@hot');


	Route::get('/login','UserController@login');
	Route::post('/login','UserController@dologin');
	//注册
	Route::get('/register','UserController@register');
	Route::post('/register','UserController@doregister');
	//激活
	Route::get('/jihuo','UserController@jihuo');
	//找回密码
	Route::get('/forget','UserController@forget');
	Route::post('/forget','UserController@doforget');
	Route::get('/reset','UserController@reset');
	Route::post('/reset','UserController@doreset');
	//图书详情页面
	Route::get('/subject/{id}','BookController@show');
	//图书分类页面
	Route::get('/tag/{id}','BookController@tag');
	//添加购物车
	Route::get('/getCart','CartController@getCart');



Route::group(['middleware'=>'login'],function(){
	//后台首页
	Route::get('/admin','AdminController@index');
	//后台模板
	Route::get('/admin','Admincontroller@index');
	// 图书管理
	Route::controller('/admin/book','BookController');
	// 作者管理
	Route::controller('/admin/author','AuthorController');
	//分类管理
	Route::controller('/admin/cate','CateController');
	//用户管理
	Route::controller('/admin/user', 'UserController');
	//作者管理
	Route::controller('/admin/author','AuthorController');
	//关注管理
	Route::controller('/admin/attention', 'AttentionController');
	//标签管理
	Route::controller('/admin/tag', 'TagController');

	// 收货地址管理
	Route::controller('/admin/order','OrderController');
	// 获取省份的信息
	Route::get('/getProvince','OrderController@getProvince');
	// 获取市区的信息
	Route::get('/getCity','OrderController@getCity');

	/********* 前台 *********/
	
	//购物车页面
	Route::get('/cart','CartController@cart');
	//购物车操作
	Route::get('/getDelete','CartController@getDelete');
	//添加收货地址
	Route::post('/insetAddress','CartController@insetAddress');
	//创建订单地址
	Route::post('/Order/create','OrderController@create');

	Route::get('/Order/changeStatus','OrderController@changeStatus');
	//订单详情
	Route::get('/ordercart','OrderController@ordercart');
		

});
