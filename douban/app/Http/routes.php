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

//后台模板
Route::get('/admin','Admincontroller@index');

// 图书管理
Route::controller('/admin/book','BookController');

// 作者管理
Route::controller('/admin/author','AuthorController');

// 收货地址管理
Route::controller('/admin/order','OrderController');
// 获取省份的信息
Route::get('/getProvince','OrderController@getProvince');
// 获取市区的信息
Route::get('/getCity','OrderController@getCity');
