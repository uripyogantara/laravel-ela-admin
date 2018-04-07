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

Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/kunjungan', "HomeController@kunjungan");
Route::get('/data-master', "HomeController@dataMaster");
Route::get('/data-pasien', "HomeController@dataPasien");
Route::get('/pengaturan', "HomeController@pengaturan");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
