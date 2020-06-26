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
Route::get('/Keluar', 'LoginController@Keluar');
Route::post('/AddCart', 'OrderController@Order');
Route::get('/Keranjang', 'OrderController@Keranjang');
Route::get('/Checkout', 'OrderController@Checkout');
Route::get('/Checkout_List', 'OrderController@Checkout_List');
Route::get('/Confirm','OrderController@Confirm');
Route::post('/Konfirm', 'OrderController@Confirm_Simpan');

