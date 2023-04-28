<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MJabatan extends Model
{
    use HasFactory;

    protected $fillable = ['jabatan_nama', 'jabatan_gaji', 'delete'];
}
