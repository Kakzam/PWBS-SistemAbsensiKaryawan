<?php

namespace App\Http\Controllers;

use App\Models\MAbsen;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ControllerAbsen extends Controller
{
    function __construct()
    {
        $this->model = new MAbsen();
    }

    function createData(Request $input)
    {
        // ['id_user', 'id_jabatan', 'gaji', 'tangal', 'bulan', 'tahun']
        $this->model->create([
            'id_user' => $input->id_user,
            'id_jabatan' => $input->id_jabatan,
            'gaji' => $input->gaji
        ]);

        return response([
            "action" => true,
            "message" => "Data Absen Berhasil Di Input",
        ], http_response_code());
    }

    function getData($param)
    {
        $tanggal = \Carbon\Carbon::createFromFormat('Y-m-d', $param);
        $bulan = $tanggal->format('m');
        $tahun = $tanggal->format('Y');
        $tanggal = $tanggal->format('d');

        $data = $this->model->where('tanggal', $tanggal)
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->get();

        foreach ($data as $item) {
            $item->nama_user = User::where('id', $item->id_user)->value('nama_user');
        }

        foreach ($data as $item) {
            $item->nama_jabatan = Jabatan::where('id', $item->id_jabatan)->value('nama_jabatan');
        }

        return response([
            "data" => $data
        ], http_response_code());
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
}
