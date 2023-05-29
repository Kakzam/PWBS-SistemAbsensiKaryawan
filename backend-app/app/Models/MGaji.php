<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MGaji extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'id_jabatan', 'gaji', 'tangal', 'bulan', 'tahun', 'total_absen', 'total_gaji'];
}
