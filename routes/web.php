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
    return view('/html/index-12');
});

/*Route::get('/cms/', function () {
    return view('/cms/index.html');
});*/

Route::get('/cms', 'HomeController@index');

/*Auth::routes();*/

Route::get('/cms', 'HomeController@index');

Route::get('/cms/login', 'Auth\LoginController@showLoginForm');
Route::post('/cms/login', 'Auth\LoginController@login');

