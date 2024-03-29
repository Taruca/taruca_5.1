<?php
// 登录认证
Route::get('auth/login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');

// 用户注册
Route::get('auth/register', 'AuthController@getRegister');
Route::post('auth/register', 'AuthController@postRegister');

//验证码
Route::get('auth/getCheckCode', 'AuthController@getCheckCode');