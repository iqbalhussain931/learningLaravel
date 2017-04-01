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

Route::get('/', 'HomeController@index');

Route::get('/cms', 'AdminController@index');
Route::get('/cms/home', 'AdminController@index');
Route::get('/cms/pages', 'AdminController@pages');
Route::get('/cms/pages/edit/{pageName}', 'AdminController@pageEdit');
Route::get('/cms/pages-url', 'AdminController@pagesUrl');
Route::post('/cms/pages-url', 'AdminController@pagesUrl');
Route::post('/cms/pages', 'AdminController@pages');
Route::get('/cms/createPage', 'AdminController@addNewPage');
Route::post('/cms/createPage', 'AdminController@createNewPage');
Route::get('/cms/widgets', 'AdminController@widgets');
Route::post('/cms/widgets', 'AdminController@createNewWidget');


Auth::routes();


Route::get('/{indexOne}', 'HomeController@indexOne');



















/*// YEH kaam Tumhara hoga jo controller se link
//  Kara hai. OKay
Route::get('/ExapleURLe', 'AdminController@createNewPage');

//USE THIS ROUTE !! yeh direct view call krta hai.
Route::get('/ExapleURLe', function (){
    return view('file path in you view folder example contactusFolder.contactusPage');
});*/





