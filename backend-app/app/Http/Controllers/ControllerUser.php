<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MUser;

class ControllerUser extends Controller
{
    function __construct()
    {
        $this->model = new MUser();
    }

    public function verifikasi(Request $input)
    {
        $username = $input->username;
        $password = $input->password;

        $login = $this->model->where('username', $username)->first();

        if ($login && ($password == $login->password)) {
            return response([
                "message" => "Anda Berhasil Login",
                "action" => true,
                "data" => $login
            ], 200);
        } else {
            return response([
                "message" => "Anda Berhasil Login",
                "action" => false
            ], 200);
        }
    }

    function getData()
    {
        return response([
            "data" => $this->model->all()
        ],http_response_code());
    }

    function deleteData($parameter)
    {
        $user = $this->model->find($parameter);

        if (!$jabatan) {
            return response([
                "action" => false,
                "message" => "Data User Tidak ditemukan"
            ], 404);
        }

        $user->delete();

        return response([
            "message" => "Data User Berhasil Dihapus",
            "action" => true
        ], 200);
    }

    function createdData(Request $input)
    {
        $this->model->create([
            'nama_user' => $input->name, 
            'id_jabatan' => $input->id,
            'username' => $input->username, 
            'password' => $input->password
        ]);

        return response([
            "action" => true,
            "message" => "Data User Berhasil Di Input",
        ],http_response_code());
    }

    function updateData(Request $input)
    {
        $user = $this->model->where('id', $input->id)->first();

        if(!$user) {
            return response([
                "message" => "Data User Gagal Di Update ! (User Tidak Ditemukan ! )",
                "action" => true
            ], 201);
        }
        
        $user->update([
            'nama_user' => $input->name,
            'id_jabatan' => $input->id,
            'username' => $input->username,
            'password' => $input->password
        ]);

        return response([
            "action" => true,
            "message" => "Data User Berhasil Di Update"
        ],http_response_code());
    }
}
