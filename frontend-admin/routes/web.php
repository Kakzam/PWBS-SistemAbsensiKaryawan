<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

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

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('user-tambah', function () {
    $url = env("APP_SERVER") . "/api/user";
    $url_jabatan = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('user_tambah', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody()), 'jabatan' => json_decode($client->get($url_jabatan)->getBody())]);
});

Route::get('user-ubah', function () {
    $url = env("APP_SERVER") . "/api/user";
    $url_jabatan = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('user_update', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody()), 'jabatan' => json_decode($client->get($url_jabatan)->getBody())]);
});

Route::get('jabatan-tambah', function () {
    $url = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('jabatan_tambah', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody())]);
});

Route::get('jabatan-ubah', function () {
    $url = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('jabatan_update', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody())]);
});

Route::get('absen', function () {
    $url = env("APP_SERVER") . "/api/absen/" .
        \Carbon\Carbon::today()->toDateString();
    $client = new Client();
    return view('absen_karyawan', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody())]);
});

Route::post('absen', function (Request $request) {
    $url = env("APP_SERVER") . "/api/absen/" . $request->date;
    $client = new Client();
    return view('absen_karyawan', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody())]);
});
