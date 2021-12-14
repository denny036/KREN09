<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/lupa-sandi', function () {
    return view('lupa-sandi');
})->name('lupa-sandi');


Route::get('verifikasi-email', function(){
    return view('verifikasi');
})->name('verifikasi-email');

//Route for Donatur
Route::get('donatur', 'DonasiController@index')->middleware('donatur')->name('donatur-home');
Route::get('donatur/donasi', 'DonasiController@donasi')->middleware('donatur')->name('donatur-donasi');
Route::post('donatur/donasi', 'DonasiController@simpanDonasi')->middleware('donatur')->name('simpan-donasi');

Route::get('donatur/detail-barang/', 'DonasiController@show')->middleware('donatur')->name('detail-barang');

Route::get('donatur/detail-barang/edit/{id}', 'DonasiController@edit')->middleware('donatur')->name('edit-donasi');
Route::put('donatur/detail-barang/update/{id}', 'DonasiController@update')->middleware('donatur')->name('update-donasi');
Route::delete('donatur/detail-barang/delete/{id}', 'DonasiController@destroy')->middleware('donatur')->name('delete-donasi');

Route::get('donatur/profil', 'ProfilDonaturController@index')->middleware('donatur')->name('donatur.profil');
Route::post('donatur/profil', 'ProfilDonaturController@updateProfile')->middleware('donatur')->name('update.profil');


// Route for Penerima Barang
Route::get('penerima', 'Penerima\PenerimaController@index')->middleware('penerima')->name('penerima.index');
Route::get('penerima/semua-barang-donasi/', 'Penerima\PenerimaController@viewBarangDonasi')->middleware('penerima')->name('barang.donasi');
Route::get('penerima/detail-barang/{id}', 'Penerima\PenerimaController@detailBarang')->middleware('penerima')->name('detailbarang');
Route::get('peroleh-barang/{id}', 'Penerima\PenerimaController@formAmbilBarang')->middleware('penerima')->name('form.peroleh-barang');
Route::post('peroleh-barang/{id}', 'Penerima\PenerimaController@ambilBarang')->middleware('penerima')->name('ambil.barang');

Route::get('penerima/profil', 'Penerima\ProfilController@index')->middleware('penerima')->name('penerima.profil');
Route::post('penerima/profil', 'Penerima\ProfilController@updateProfilPenerima')->middleware('penerima')->name('update.profil-penerima');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

