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
//我读
Route::get('/mine/{id}','UserController@Mine');
//关注
Route::get('/attention','AttentionController@show');
Route::get('/doattention','AttentionController@delete');




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



Route::group(['middleware'=>'login'],function(){
	//后台首页
	Route::get('/admin','AdminController@index');
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

		

});
