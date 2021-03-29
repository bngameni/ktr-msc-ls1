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

Route::get('/', 'UserController@home')->name('login');

Route::post('post-login', 'UserController@userPostLogin');

Route::resource('user', 'UserController');

Route::get('/logout','UserController@logout')->name('logout');

Route::get('/add-library','LibraryController@createLibrary')->name('add-library');
Route::post('/store-library','LibraryController@saveLibrary')->name('store-library');

Route::get('/show-library','LibraryController@showAllLibrary')->name('show-library');