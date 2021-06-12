<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'App\Http\Controllers\DokterController@index');
Route::get('/dokter/add', 'App\Http\Controllers\DokterController@add');
Route::post('/dokter/tambah', 'App\Http\Controllers\DokterController@tambah');
Route::get('/dokter/edit/{id}', 'App\Http\Controllers\DokterController@edit');
Route::post('/dokter/update', 'App\Http\Controllers\DokterController@update');
Route::get('/dokter/del/{id}', 'App\Http\Controllers\DokterController@del');
Route::get('/dokter/importview', 'App\Http\Controllers\DokterImportController@index');
Route::post('/dokter/import', 'App\Http\Controllers\DokterImportController@import');

