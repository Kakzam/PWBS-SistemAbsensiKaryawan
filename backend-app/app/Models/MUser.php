<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUser extends Model
{
    use HasFactory;
    protected $fillable = ['nama_user', 'id_jabatan', 'username', 'password'];
}
