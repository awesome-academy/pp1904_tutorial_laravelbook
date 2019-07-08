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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::prefix('tickets')->group(function (){
    Route::prefix('{slugs}')->group(function (){
        Route::get('edit','TicketsController@edit');
        Route::post('edit','TicketsController@update');
        Route::post('delete','TicketsController@destroy');
    });
    Route::get('{slug?}', 'TicketsController@show');
});
Route::get('/contact', 'TicketsController@create');

Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@index');
