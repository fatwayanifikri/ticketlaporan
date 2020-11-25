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

Route::get('/', function () {
    return view('welcome');
});

//route INDEX
Route::get('/ticket','PegawaiController@index');

//route view closed ticket
Route::get('/ticket/viewclosed','PegawaiController@viewclosed');

//route view active ticket
Route::get('/ticket/viewactive','PegawaiController@viewactive');

//route report progress
Route::get('/ticket/report','PegawaiController@report');
Route::get('/ticket/cari','PegawaiController@cari');

//route tambah data
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

//route edit data
Route::get('/ticket/edit/{id}','PegawaiController@edit');
Route::post('/ticket/update','PegawaiController@update');

//route hapus data
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');