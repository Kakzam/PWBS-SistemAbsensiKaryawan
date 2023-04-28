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

    public function get_find($find)
    {
        $data = $this->model->find($find);
        // $data = $this->model->find(base64_decode($find));

        if (!$data) {
            return response([
                "message" => "Data not found",
                "param" => false
            ], 404);
        }
        
        return response([
                "param" => true,
                "message" => "Data found",
                "jabatan" => $data
            ], 200);
    }

    public function delete_jabatan($id)
    {
        $jabatan = $this->model->find($id);

        if (!$jabatan) {
            return response([
                "message" => "Data not found",
                "param" => false
            ], 404);
        }

        $jabatan->delete();

        return response([
            "message" => "Data deleted successfully",
            "param" => true
        ], 200);
    }

    public function update_jabatan(Request $request)
    {
        $jabatan = $this->model->find($request->id);

        if (!$jabatan) {
            return response([
                "message" => "Data not found",
                "param" => false
            ], 404);
        }

        $jabatan->jabatan_nama = $request->jabatan_nama;
        $jabatan->jabatan_gaji = $request->jabatan_gaji;
        $jabatan->delete = 1;
        // $jabatan->delete = $request->delete;
        $jabatan->save();

        return response([
            "message" => "Data updated successfully",
            "param" => true,
            "jabatan" => $jabatan,
            "request" => $request
        ], 200);
    }
}