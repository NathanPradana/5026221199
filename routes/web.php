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


//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/sercen', function () {
    return view('sercen');
});

Route::get('/linktree', function () {
    return view('LinkTreeISE24');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/responsive1', function () {
    return view('responsive1');
});

Route::get('/style', function () {
    return view('Style');
});

Route::get('/style2', function () {
    return view('Style 2');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/5026221199', function () {
    return view('5026221199');
});


Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

//route CRUD
Route::get('unggas', 'App\Http\Controllers\unggasControllerDB@index');

Route::get('/unggas/tambah','App\Http\Controllers\unggasControllerDB@tambah');

Route::get('/unggas/edit/{id}','App\Http\Controllers\unggasControllerDB@edit');

Route::get('/unggas/hapus/{id}','App\Http\Controllers\unggasControllerDB@hapus');

Route::post('/unggas/store','App\Http\Controllers\unggasControllerDB@store');

Route::post('/unggas/update','App\Http\Controllers\unggasControllerDB@update');

Route::get('/unggas/cari','App\Http\Controllers\unggasControllerDB@cari');

Route::get('pegawai', 'App\Http\Controllers\PegawaiControllerDB@indexpegawai');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiControllerDB@tambahpegawai');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiControllerDB@editpegawai');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiControllerDB@hapuspegawai');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiControllerDB@storepegawai');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiControllerDB@updatepegawai');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiControllerDB@caripegawai');

Route::get('/','App\Http\Controllers\counterController@index2');
