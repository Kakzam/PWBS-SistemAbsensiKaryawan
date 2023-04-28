<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;

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

Route::get('jabatan', [JabatanController::class, 'index']);
Route::post('jabatan', [JabatanController::class, 'vw_update']);

Route::get('karyawan', [KaryawanController::class, 'index']);
Route::post('karyawan', [KaryawanController::class, 'vw_update']);
