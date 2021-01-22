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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'petugas'], function(){
    Route::get('index', 'PetugasController@index')->name('petugas');

    Route::get('create', 'PetugasController@create')->name('petugas.create');

    Route::post('save','PetugasController@store')->name('petugas.save');

});

Route::group(['prefix' => 'lapangan'], function(){
    Route::get('index', 'Lapangan\LapanganController@index')->name('task.lapangan.index');

    Route::get('create', 'Lapangan\LapanganController@create')->name('lapangan.create');

});

Route::group(['prefix' => 'pelanggan'], function(){
    Route::get('index', 'Pelanggan\PelangganController@index')->name('task.pelanggan.index');

    Route::get('create', 'Pelanggan\PelangganController@create')->name('task.pelanggan.create');



});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('index', 'Transaksi\TransaksiController@index')->name('task.transaksi.index');

});

Route::group(['prefix' => 'home'], function(){
    Route::get('index', 'Home\HomeController@index')->name('task.home.index');

});