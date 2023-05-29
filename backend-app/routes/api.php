<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAbsen;
use App\Http\Controllers\ControllerGaji;
use App\Http\Controllers\ControllerJabatan;
use App\Http\Controllers\ControllerUser;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Validasi Data Login */
Route::post('login',[ControllerUser::class,'verifikasi']);

/* Menambahkan Data User */
Route::post('user',[ControllerUser::class,'createdData']);

/* Mengambil Semua Data User */
Route::get('user',[ControllerUser::class,'getData']);

/* Menghapus Data User Berdasarkan ID */
Route::delete('user/{parameter}',[ControllerUser::class,'deleteData']);

/* Mengupdate Data User */
Route::put('user',[ControllerUser::class,'updateData']);

/*************************************************************************/

/* Menambahkan Data Jabatan */
Route::post('user',[ControllerJabatan::class,'createdData']);

/* Mengambil Semua Data Jabatan */
Route::get('user',[ControllerJabatan::class,'getData']);

/* Menghapus Data Jabatan Berdasarkan ID */
Route::delete('user/{parameter}',[ControllerJabatan::class,'deleteData']);

/* Mengupdate Data Jabatan */
Route::put('user',[ControllerJabatan::class,'updateData']);

/*************************************************************************/
