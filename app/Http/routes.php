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

// 后台首页
Route::get('index', 'admin\AdminController@index');

Route::get('header', 'admin\AdminController@header');

Route::get('show', 'admin\AdminController@show');