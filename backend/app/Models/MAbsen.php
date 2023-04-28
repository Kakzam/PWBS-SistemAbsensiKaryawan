<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MAbsen extends Model
{
    use HasFactory;

    protected $fillable = ['karyawan_id', 'jabatan_id', 'tanggal', 'bulan', 'tahun', 'gaji'];
}