<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MJabatan;

class JabatanController extends Controller
{
    function __construct()
    {
        $this->model = new MJabatan();
    }
}