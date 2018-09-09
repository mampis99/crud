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


Route::get('/barang','BarangController@get');
Route::post('/barang/save','BarangController@insert');
Route::get('/barang/edit/{id}','BarangController@edit');
Route::post('/barang/act_edit','BarangController@act_edit');
Route::get('/barang/delete/{id}','BarangController@delete');
