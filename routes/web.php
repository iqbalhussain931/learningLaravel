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

Route::get('/cms/home', 'AdminController@index');
Route::get('/cms/pages', 'AdminController@pages');
Route::get('/cms/pages-url', 'AdminController@pagesUrl');


Auth::routes();


