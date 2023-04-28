<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* JABATAN */

// Menambah Data Jabatan
Route::post('jabatan', [JabatanController::class, 'create_jabatan']);

// Menampilkan Semua Data Jabatan
Route::get('jabatan', [JabatanController::class, 'get_all']);

// Mencari Salah Satu Data Jabatan
Route::get('jabatan_cari/{parameter}', [JabatanController::class, 'get_find']);

// Menghapus Data Jabatan
Route::delete('jabatan_delete/{parameter}', [JabatanController::class, 'delete_jabatan']);

// Mengupdate Data Jabatan
Route::post('jabatan_update', [JabatanController::class, 'update_jabatan']);

/* KARYAWAN */

// Menambah Data Karyawan
Route::post('karyawan', [KaryawanController::class, 'create_karyawan']);

// Menampilkan Semua Data Jabatan
Route::get('karyawan', [KaryawanController::class, 'get_all']);

// Mencari Salah Satu Data Jabatan
Route::get('karyawan_cari/{parameter}', [KaryawanController::class, 'get_find']);

// Menghapus Data Jabatan
Route::delete('karyawan_delete/{parameter}', [KaryawanController::class, 'delete_karyawan']);

// Mengupdate Data Jabatan
Route::post('karyawan_update', [KaryawanController::class, 'update_karyawan']);

/* ABSEN */

