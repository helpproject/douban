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
//前台首页
Route::get('/', 'HomeController@home');
Route::get('/e', 'HomeController@e');
//ajax登录
Route::post('/getLogin','AdminController@getLogin');

//后台登录页面
Route::get('/admin/login','AdminController@alogin');
Route::post('/admin/login','AdminController@adoLogin');

/*******  前台 ********/
Route::get('/cate','CateController@index');//分类
Route::get('/cate/hot','CateController@hot');

Route::get('/login','UserController@login');
Route::post('/login','UserController@dologin');
//注册
Route::get('/register','UserController@register');
Route::post('/register','UserController@doregister');
//我读
Route::get('/mine/{id}','UserController@Mine');


Route::get('/account','UserController@account')->middleware('login');
Route::post('/account','UserController@doaccount')->middleware('login');
Route::get('/suicide','UserController@suicide')->middleware('login');
Route::post('/suicide','UserController@dosuicide')->middleware('login');
Route::get('/upimage','UserController@upimage')->middleware('login');
//激活
Route::get('/jihuo','UserController@jihuo');
//找回密码
Route::get('/forget','UserController@forget');
Route::post('/forget','UserController@doforget');
Route::get('/reset','UserController@reset');
Route::post('/reset','UserController@doreset');
//图书详情页面
Route::get('/subject/{id}','BookController@show');
//图书列表页面
Route::get('/tag','BookController@tag');
Route::get('/tags','BookController@tags');
//ajax添加购物车
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

/******* 前台 ********/
	//账号管理
    Route::get('/account','UserController@account');
    Route::post('/account','UserController@doaccount');
    Route::get('/suicide','UserController@suicide');
    Route::post('/suicide','UserController@dosuicide');
    Route::get('/upimage','UserController@upimage');
	//我读
	Route::get('/wodu/{id}','ReadbookController@wodu');
	Route::get('/duguo/{id}','ReadbookController@duguo');
	Route::get('/zaidu/{id}','ReadbookController@zaidu');
	Route::get('/shanchu','ReadbookController@xiangdu');
	//动态
	Route::get('/dongtai/{id}','ReadbookController@dongtai');
	//站内信
	Route::get('/to/{id}','UserController@zhanneixin');
	//所有关注的人
	Route::get('/people/{id}','AttentionController@people');
	//购物车页面
	Route::get('/cart/{uid}','CartController@cart');
	Route::get('/cart/init','CartController@init');
	//购物车操作
	Route::get('/getDelete','CartController@getDelete');
	//添加收货地址
	Route::get('/insetAddress','CartController@insetAddress');
	//创建订单地址
	Route::post('/Order/create','OrderController@create');

	Route::get('/Order/changeStatus','OrderController@changeStatus');
	//订单详情
	Route::get('/ordercart','OrderController@ordercart');
});
