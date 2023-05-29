<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_absens', function (Blueprint $table) {
            $table->id();
            $table->string("id_user");
            $table->string("id_jabatan");
            $table->string("gaji");
            $table->string("tanggal");
            $table->string("bulan");
            $table->string("tahun");
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
        Schema::dropIfExists('m_absens');
    }
}
