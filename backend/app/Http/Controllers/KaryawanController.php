<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mkaryawan;

class KaryawanController extends Controller
{
    function __construct()
    {
        $this->model = new Mkaryawan();
    }
}