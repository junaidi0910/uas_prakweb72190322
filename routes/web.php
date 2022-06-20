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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/koneksi', function () {
    return view('koneksi');
});

Route::get('/dosen', '\App\Http\Controllers\DosenController@dosen');

Route::get('/dosen/cari', '\App\Http\Controllers\DosenController@pencarian');

Route::get('/dosen/formulirdosen', '\App\Http\Controllers\DosenController@formulirdosen');

Route::post('/dosen/simpandosen', '\App\Http\Controllers\DosenController@simpandosen');


Route::get('/mahasiswa', '\App\Http\Controllers\MahasiswaController@mahasiswa');
Route::get('/mahasiswa/formulirmahasiswa', '\App\Http\Controllers\MahasiswaController@formulirmahasiswa');
Route::post('/mahasiswa/simpanmahasiswa', '\App\Http\Controllers\MahasiswaController@simpanmahasiswa');

Route::get('/dosen/editdosen/{id}', '\App\Http\Controllers\DosenController@editdosen');
Route::put('/dosen/updatedosen/{id}', '\App\Http\Controllers\DosenController@updatedosen');
Route::get('/dosen/hapusdosen/{id}', '\App\Http\Controllers\DosenController@hapusdosen');

Route::get('/mahasiswa/editmahasiswa/{id}', '\App\Http\Controllers\MahasiswaController@editmahasiswa');
Route::put('/mahasiswa/updatemahasiswa/{id}', '\App\Http\Controllers\MahasiswaController@updatemahasiswa');
Route::get('/mahasiswa/hapusmahasiswa/{id}', '\App\Http\Controllers\MahasiswaController@hapusmahasiswa');


Route::get('/user', '\App\Http\Controllers\AuthController@user');
Route::get('/user/formuliruser', '\App\Http\Controllers\AuthController@formuliruser');
Route::post('/user/simpanuser', '\App\Http\Controllers\AuthController@simpanuser');
Route::get('/login', '\App\Http\Controllers\AuthController@login');
Route::post('/user/ceklogin', '\App\Http\Controllers\AuthController@ceklogin');

Route::get('/logout', '\App\Http\Controllers\AuthController@logout');

Route::get('/user/edituser/{id}', '\App\Http\Controllers\AuthController@edituser');
Route::put('/user/updateuser/{id}', '\App\Http\Controllers\AuthController@updateuser');
Route::get('/user/hapususer/{id}', '\App\Http\Controllers\AuthController@hapususer');


