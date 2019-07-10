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
    return 'Welcome to our home page!';
});

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'TicketsController@create');

Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@index');

Route::prefix('ticket')->group(function () {
    Route::prefix('{slug?}')->group(function () {
    Route::get('/', 'TicketsController@show');
    Route::get('/edit','TicketsController@edit');
    Route::post('/edit','TicketsController@update');
    Route::post('/delete','TicketsController@destroy');
    });
});

Route::post('/comment', 'CommentsController@newComment');

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
