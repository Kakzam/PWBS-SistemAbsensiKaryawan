<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();

    }

    function index()
    {
        $url = env("URL_SERVER") . "/api/jabatan";
        $request = $this->client->get($url);
        $response = $request->getBody();

        // echo $url;
        // dd($response);
        $data = [
            'url' => env("URL_SERVER"),
            'result' => json_decode($response)
        ];

        return view("jabatan/vw_jabatan",$data);
    }
}
