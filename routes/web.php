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

Route::post('/comment', 'CommentsController@newComment');

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');

Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');

Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'], function (){
    Route::get('users', [ 
        'as' => 'admin.user.index', 
        'uses' => 'UsersController@index',
    ]);
    Route::get('roles', [ 
        'as' => 'admin.role',
        'uses' => 'RolesController@index',
    ]);

    Route::get('roles/create', [
        'as' => 'admin.role.create',
        'uses' => 'RolesController@create',
    ]);
    Route::post('roles/create', 'RolesController@store');

    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit','UsersController@update');

    Route::get('/', 'PagesController@home');
});
