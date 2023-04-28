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

    public function get_find($find)
    {
        $data = $this->model->find($find);

        if (!$data) {
            return response([
                "message" => "Data not found",
                "param" => false
            ], 404);
        }
        
        return response([
                "param" => true,
                "message" => "Data found",
                "karyawan" => $data
            ], 200);
    }

    public function delete_karyawan($id)
    {
        $karyawan = $this->model->find($id);

        if (!$karyawan) {
            return response([
                "message" => "Data not found",
                "param" => false
            ], 404);
        }

        $karyawan->delete();

        return response([
            "message" => "Data deleted successfully",
            "param" => true
        ], 200);
    }
}