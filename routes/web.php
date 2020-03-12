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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
	return view('admin');
})->middleware('admin');

Route::post('/post', 'PostController@store')->middleware('admin');

Route::post('/redact', 'PostController@update')->middleware('admin');

Route::post('/delete', 'PostController@delete')->middleware('admin');

Route::post('/delcom', 'CommentsController@delete')->middleware('admin');

Route::get('/news', 'ShowController@index');

Route::post('/addcom', 'CommentsController@index');

Route::get('/findpost', 'FindController@index');

Route::get('/postfind', 'FindController@cat');