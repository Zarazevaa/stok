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
    // return view('welcome');
    echo "Selamat Datang jepaaaaaaaaaaaa";
});

Route::get('/satu', function () {
    // return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "Six";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "Seven";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "Eight";
});

Route::get('/sembilan', function () {
    // return view('welcome');
    echo "Nine";
});

Route::get('/Sepuluh', function () {
    // return view('welcome');
    echo "Ten";
});

//1. echo langsung nested
Route::get('/Sepuluh', function () {
    // return view('welcome');
    echo "Ten";
    });

//2. manggil view
Route::get('/nemplate', function () {
    return view('template');
    });

//3. manggil controller
Route::get('/usang', 'Usang@kontrol');
//file controllernya namanya UsangController
//nama url Usang
//index nama functionnya
Route::get('/aku', 'Usang@jeruk');

Route::resource('kontak', 'kontak');
Route::get('/', function(){
  return view('index');
});

Route::get('/CleaningService', 'CleanerController@index');

Route::get('login', 'Login@index');

Route::post('login/cek','Login@cek');

Route::get('/','Dashboard@index');

Route::get('/logout','login@logout');

Route::resource ('/satpam','Satpam');

Route::resource ('/kabupaten','kabupaten');

Route::resource ('/penjualan','penjualan');

Route::resource ('/barang','barang');

Route::resource ('/pembelian','pembelian');
