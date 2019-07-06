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
<<<<<<< HEAD

Route::get('/contact', 'TicketsController@create');

Route::post('/contact', 'TicketsController@store');
   
Route::prefix('tickets')->group(function (){
    Route::get('/', 'TicketsController@index');  

    Route::prefix('{slug?}')->group(function (){
        Route::get('/', 'TicketsController@show');

        Route::get('/edit','TicketsController@edit');
        Route::post('/edit','TicketsController@update');
        Route::post('/delete','TicketsController@destroy');
    });
});
=======
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/tickets/{slug?}', 'TicketsController@show');
Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug?}/edit','TicketsController@update');
Route::post('/tickets/{slug?}/delete','TicketsController@destroy');
>>>>>>> CRUD application
