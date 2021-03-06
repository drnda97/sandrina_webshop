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

Route::get('/', 'UsersController@index');
Route::get('/gallery', 'UsersController@gallery');
Route::get('/contact', 'UsersController@contact');
Route::get('/collection', 'UsersController@collection');
Route::get('/about', 'UsersController@about');
Route::get('/login', 'UsersController@login');
Route::get('/register', 'UsersController@register');
