<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMkaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_karyawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jabatan_id');
            $table->string("nik")->unique();
            $table->string("nama");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("delete")->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_karyawan');
    }
}
