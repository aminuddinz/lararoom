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

Route::get('/', 'RoomsController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/rooms', 'RoomsController');
Route::get('/rooms/edit/{id}', 'RoomsController@edit');
Route::post('/rooms/edit/{id}', 'RoomsController@update');
Route::get('/rooms/delete/{id}', 'RoomsController@destroy');

Route::resource('/status', 'StatusController');
Route::get('/status/edit/{id}', 'StatusController@edit');
Route::post('/status/edit/{id}', 'StatusController@update');
Route::get('/status/delete/{id}', 'StatusController@destroy');
