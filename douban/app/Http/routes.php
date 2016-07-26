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
/*******  前台 ********/
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



Route::controller('/admin/user', 'UserController');
Route::controller('/admin/attention', 'AttentionController');
Route::controller('/admin/tag', 'TagController');