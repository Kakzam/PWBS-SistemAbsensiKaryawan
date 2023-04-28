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

    public function create_jabatan(Request $request)
    {
        $jabatan = $this->model->create([
            "jabatan_nama" => $request->jabatan_nama,
            "jabatan_gaji" => $request->jabatan_gaji
        ]);

        return response([
            "message" => "Data created successfully",
            "param" => true,
            "jabatan" => $jabatan
        ], 201);
    }

    public function get_all()
    {
        $data = $this->model->all();

        return response([
            "jabatan" => $data
        ], http_response_code());
    }
}