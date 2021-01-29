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

    Route::post('store','PetugasController@store')->name('petugas.store');

    Route::get('edit/{petugas}', 'PetugasController@edit')->name('petugas.edit');

    Route::patch('update/{petugas}', 'PetugasController@update')->name('petugas.update');
    Route::delete('delete/{petugas}', 'PetugasController@destroy')->name('petugas.delete');

});

Route::group(['prefix' => 'lapangan'], function(){
    Route::get('index', 'Lapangan\LapanganController@index')->name('task.lapangan.index');

    Route::get('create', 'Lapangan\LapanganController@create')->name('lapangan.create');

    Route::post('store','Lapangan\LapanganController@store')->name('lapangan.store');

    Route::get('edit/{lapangan}', 'Lapangan\LapanganController@edit')->name('lapangan.edit');

    Route::patch('update/{lapangan}', 'Lapangan\LapanganController@update')->name('lapangan.update');
    Route::delete('delete/{lapangan}', 'Lapangan\LapanganController@destroy')->name('lapangan.delete');

});

Route::group(['prefix' => 'pelanggan'], function(){
    Route::get('index', 'Pelanggan\PelangganController@index')->name('task.pelanggan.index');

    Route::get('create', 'Pelanggan\PelangganController@create')->name('task.pelanggan.create');

    Route::post('store', 'Pelanggan\PelangganController@store')->name('pelanggan.store');

    Route::get('edit/{pelanggan}', 'Pelanggan\PelangganController@edit')->name('pelanggan.edit');

    Route::patch('update/{pelanggan}', 'Pelanggan\PelangganController@update')->name('pelanggan.update');
    Route::delete('delete/{pelanggan}', 'Pelanggan\PelangganController@destroy')->name('pelanggan.delete');

});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('index', 'Transaksi\TransaksiController@index')->name('task.transaksi.index');

    Route::get('create', 'Transaksi\TransaksiController@create')->name('task.transaksi.create');
    
    Route::post('store', 'Transaksi\TransaksiController@store')->name('transaksi.store');

});

Route::group(['prefix' => 'home'], function(){
    Route::get('index', 'Home\HomeController@index')->name('task.home.index');

});