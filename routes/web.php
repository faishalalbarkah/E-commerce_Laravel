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

Route::get('/', 'UtamaController@index');
Route::post('/pushData', 'UtamaController@store');
Route::get('/Login', 'LoginController@index');
Route::post('/Daftar', 'LoginController@Register');
Route::post('/Masuk', 'LoginController@Masuk');

