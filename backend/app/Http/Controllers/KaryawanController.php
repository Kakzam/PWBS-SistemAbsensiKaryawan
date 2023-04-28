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

    public function create_karyawan(Request $request)
    {
        $karyawan = $this->model->create([
            "jabatan_id" => $request->jabatan_id,
            "nik" => $request->nik,
            "nama" => $request->nama,
            "username" => $request->username,
            "password" => $request->password
        ]);

        return response([
            "message" => "Data created successfully",
            "param" => true,
            "karyawan" => $karyawan
        ], 201);
    }

    public function get_all()
    {
        $data = $this->model->all();

        return response([
            "karyawan" => $data
        ], http_response_code());
    }
}