<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();

    }

    function index()
    {
        $url_karyawan = env("URL_SERVER") . "/api/karyawan";
        $url_jabatan = env("URL_SERVER") . "/api/jabatan";

        $request_jabatan = $this->client->get($url_jabatan);
        $request_karyawan = $this->client->get($url_karyawan);

        $response_jabatan = $request_jabatan->getBody();
        $response_karyawan = $request_karyawan->getBody();

        $data = [
            'url' => env("URL_SERVER"),
            'result_karyawan' => json_decode($response_karyawan),
            'result_jabatan' => json_decode($response_jabatan)
        ];

        return view("karyawan/vw_karyawan",$data);
    }
}
