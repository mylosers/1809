<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wechat/url','Wechat\WechatController@getEvent');   //接入
Route::post('/wechat/url','Wechat\WechatController@wxEvent');   //接入
Route::get('/wechat/access_token','Wechat\WechatController@access_token');   //获取access_token

Route::any('/wechat/getUserInfo','Wechat\WechatController@getUserInfo');   //获取用户详细信息
Route::any('/wechat/CustomMenu','Wechat\WechatController@CustomMenu');   //获取用户详细信息
