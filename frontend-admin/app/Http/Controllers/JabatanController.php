<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();

    }
}
