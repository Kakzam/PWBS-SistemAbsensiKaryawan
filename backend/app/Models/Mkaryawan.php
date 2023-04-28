<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mkaryawan extends Model
{
    use HasFactory;

    protected $fillable = ['jabatan_id', 'nik', 'nama', 'username', 'password', 'delete'];
}
