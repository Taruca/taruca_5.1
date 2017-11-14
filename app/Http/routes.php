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

/* 后台登录模块 */
Route::group(['namespace' => 'Auth', 'as' => 'auth::'], function () {
    require_once __DIR__ . '/Routes/auth.php';
});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function () {
    require_once __DIR__ . '/Routes/backend.php';
});