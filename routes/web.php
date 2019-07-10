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

Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'TicketsController@create');

Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@index');

Route::prefix('/ticket')->group(function () {
	Route::get('/{slug?}', 'TicketsController@show');
	
	Route::prefix('/{slug?}')->group(function () {
		Route::get('/edit','TicketsController@edit');
		Route::post('/edit','TicketsController@update');
		Route::post('/delete','TicketsController@destroy');
	});


});

Route::post('/comment', 'CommentsController@newComment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
