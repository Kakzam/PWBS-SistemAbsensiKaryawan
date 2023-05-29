<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MJabatan;

class ControllerJabatan extends Controller
{
    function __construct()
    {
        $this->model = new MJabatan();
    }

    function createData(Request $input)
    {
        $this->model->create([
            'nama_jabatan' => $input->name, 
            'gaji' => $input->gaji
        ]);

        return response([
            "action" => true,
            "message" => "Data Jabatan Berhasil Di Input",
        ],http_response_code());
    }

    function getData()
    {
        return response([
            "data" => $this->model->all()
        ],http_response_code());
    }

    function deleteData($parameter)
    {
        $data = $this->model->find($parameter);

        if (!$data) {
            return response([
                "action" => false,
                "message" => "Data Jabatan Tidak Ditemukan"
            ], 404);
        }

        $data->delete();

        return response([
            "message" => "Data Jabatan Berhasil Dihapus",
            "action" => true
        ], 200);
    }

    function updateData(Request $input)
    {
        $data = $this->model->where('id', $input->id)->first();

        if(!$data) {
            return response([
                "message" => "Data Jabatan Gagal Di Update ! (Tidak Ditemukan ! )",
                "action" => true
            ], 201);
        }
        
        $data->update([
            'nama_jabatan' => $input->name,
            'gaji' => $input->gaji
        ]);

        return response([
            "action" => true,
            "message" => "Data Jabatan Berhasil Di Update"
        ],http_response_code());
    }
}
