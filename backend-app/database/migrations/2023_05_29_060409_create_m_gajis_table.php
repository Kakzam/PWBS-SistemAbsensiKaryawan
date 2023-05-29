<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gajis', function (Blueprint $table) {
            $table->id();
            $table->string("id_user");
            $table->string("id_jabatan");
            $table->string("tanggal");
            $table->string("bulan");
            $table->string("tahun");
            $table->string("total_absen");
            $table->string("total_gaji");
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
        Schema::dropIfExists('m_gajis');
    }
}
