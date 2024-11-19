<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('NIP');
            $table->string('nama_karyawan');
            $table->string('divisi');
            $table->string('judul');
            $table->text('isi');
            $table->string('kategori');
            $table->string('lampiran');
            $table->string('nomor_wa');
            $table->string('sifat');
            $table->string('status'); // Diverifikasi | Belum Verifikasi
            $table->string('progress'); // Waiting | Process | Finish 
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
        Schema::dropIfExists('laporans');
    }
};
