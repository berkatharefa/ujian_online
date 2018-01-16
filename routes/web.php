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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get(PATH, 'CONTROLLER@FUNCTION')->middleware('auth');
// middleware('auth') : mewajibkan login dulu untuk mengakses route ini
// di php, method == function
Route::get('/', 'WelcomeController@index')->middleware('auth');
Route::get('start', 'StartController@index');
Route::get('start/{nmr}', 'StartController@lanjutkan');
Route::get('kembali/{nmr}', 'StartController@kembali');
Route::get('list/', 'ListController@index');