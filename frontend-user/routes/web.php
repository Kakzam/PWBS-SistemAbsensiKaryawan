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

Route::get('absen', function () {
    $url = env("APP_SERVER") . "/api/absen";
    $url_absen = env("APP_SERVER") . "/api/absen";
    $client = new Client();
    return view('absen', ['url' => env("APP_SERVER"), 'response' => json_decode($client->get($url)->getBody()), 'absen' => json_decode($client->get($url_absen)->getBody())]);
});


