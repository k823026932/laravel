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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('foo', function () {
	return 'helloWorld';
});
Route::any('fanbing', function () {
	return '傻逼';
});*/
Route::get('/', 'Home\IndexController@index');
Route::any('home/index', 'Home\UserController@index');
Route::any('home/register', 'Home\UserController@register');
Route::any('home/code', 'Home\UserController@code');
Route::any('home/doRegister', 'Home\UserController@doRegister');
Route::any('home/login', 'Home\UserController@login');
Route::any('home/doLogin', 'Home\UserController@doLogin');
Route::get('/index/captcha/{tmp}', 'Home\UserController@captcha');
Route::any('home/send', 'Home\UserController@send');
Route::any('home/doSend', 'Home\UserController@doSend');
Route::any('home/logout', 'Home\UserController@logout');
Route::any('home/xiugaitouxiang', 'Home\UserController@xiugaitouxiang');
Route::any('home/doXgzl', 'Home\UserController@doXgzl');
Route::any('home/about', 'Home\UserController@about');
Route::any('home/shousuo/', 'Home\UserController@shousuo');
Route::any('home/huitie/{id}', 'Home\UserController@huitie');
Route::any('home/doHuitie/{id}', 'Home\UserController@doHuitie');


Route::any('admin/alogin', 'Admin\UserController@alogin');
Route::any('admin/doLogin', 'Admin\UserController@doLogin');
Route::any('admin/admin', 'Admin\UserController@admin');
Route::any('admin/aindex', 'Admin\UserController@aindex');
Route::any('admin/doShanchu', 'Admin\UserController@doShanchu');
Route::any('admin/uShanchu', 'Admin\UserController@uShanchu');
Route::any('admin/hindex', 'Admin\UserController@hindex');
Route::any('admin/uindex', 'Admin\UserController@uindex');