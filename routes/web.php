<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('abari_layout.home');
});

Route::get('/abari', function () {
    return view('abari_layout.home');
});

Route::get('/abari/home', function () {
    return view('abari_layout.home');
});

Route::get('abari_akun', 'App\Http\Controllers\AbariAkunController@index');
Route::get('abari_akun/tambah', 'App\Http\Controllers\AbariAkunController@tambah');
Route::post('abari_akun/tambah_proses', 'App\Http\Controllers\AbariAkunController@tambah_proses');
Route::get('abari_akun/edit/{id}', 'App\Http\Controllers\AbariAkunController@edit');
Route::post('abari_akun/edit_proses', 'App\Http\Controllers\AbariAkunController@edit_proses');
Route::get('abari_akun/delete/{id}', 'App\Http\Controllers\AbariAkunController@delete');

Route::get('abari_user', 'App\Http\Controllers\AbariUserController@index');
Route::get('abari_user/tambah', 'App\Http\Controllers\AbariUserController@tambah');
Route::post('abari_user/tambah_proses', 'App\Http\Controllers\AbariUserController@tambah_proses');
Route::get('abari_user/edit/{id}', 'App\Http\Controllers\AbariUserController@edit');
Route::post('abari_user/edit_proses', 'App\Http\Controllers\AbariUserController@edit_proses');
Route::get('abari_user/delete/{id}', 'App\Http\Controllers\AbariUserController@delete');

Route::get('abari_induk_user', 'App\Http\Controllers\AbariIndukUserController@index');
Route::get('abari_induk_user/tambah', 'App\Http\Controllers\AbariIndukUserController@tambah');
Route::post('abari_induk_user/tambah_proses', 'App\Http\Controllers\AbariIndukUserController@tambah_proses');
Route::get('abari_induk_user/edit/{id}', 'App\Http\Controllers\AbariIndukUserController@edit');
Route::post('abari_induk_user/edit_proses', 'App\Http\Controllers\AbariIndukUserController@edit_proses');
Route::get('abari_induk_user/delete/{id}', 'App\Http\Controllers\AbariIndukUserController@delete');

Route::get('abari_jurnal', 'App\Http\Controllers\AbariJurnalController@index');
Route::get('abari_jurnal/tambah', 'App\Http\Controllers\AbariJurnalController@tambah');
Route::post('abari_jurnal/tambah_proses', 'App\Http\Controllers\AbariJurnalController@tambah_proses');
Route::get('abari_jurnal/edit/{id}', 'App\Http\Controllers\AbariJurnalController@edit');
Route::post('abari_jurnal/edit_proses', 'App\Http\Controllers\AbariJurnalController@edit_proses');
Route::get('abari_jurnal/delete/{id}', 'App\Http\Controllers\AbariJurnalController@delete');