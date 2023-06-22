<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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

Route::get('user-absen', function () {
    $url = env("APP_SERVER") . "/api/user";
    $url_jabatan = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('user_absen', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody()), 'jabatan' => json_decode($client->get($url_jabatan)->getBody())]);
});

Route::get('user-gaji', function () {
    $url = env("APP_SERVER") . "/api/user";
    $url_jabatan = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('user_gaji', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody()), 'jabatan' => json_decode($client->get($url_jabatan)->getBody())]);
});

Route::get('user-profile', function () {
    $url = env("APP_SERVER") . "/api/user";
    $url_jabatan = env("APP_SERVER") . "/api/jabatan";
    $client = new Client();
    return view('user_profile', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody()), 'jabatan' => json_decode($client->get($url_jabatan)->getBody())]);
});
