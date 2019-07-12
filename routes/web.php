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

Route::prefix('/users')->group(function () {
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login');
	Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
	Route::post('/register', 'Auth\RegisterController@register');
	Route::get('/logout', 'Auth\LoginController@logout');
});

Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => 'manager',
], function () {
	Route::get('/', 'PagesController@home');
	Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']);
	Route::get('roles', 'RolesController@index');
	Route::get('roles/create', 'RolesController@create');
	Route::post('roles/create', 'RolesController@store');
	Route::get('users/{id?}/edit', 'UsersController@edit');
	Route::post('users/{id?}/edit','UsersController@update');
	Route::get('posts', 'PostsController@index');
	Route::get('posts/create', 'PostsController@create');
	Route::post('posts/create', 'PostsController@store');
	Route::get('posts/{id?}/edit', 'PostsController@edit');
	Route::post('posts/{id?}/edit','PostsController@update');
	Route::get('categories', 'CategoriesController@index');
	Route::get('categories/create', 'CategoriesController@create');
	Route::post('categories/create', 'CategoriesController@store');
});

Route::get('/blog', 'BlogController@index');

Route::get('/blog/{slug?}', 'BlogController@show');
