<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIP', 'nama_karyawan', 'divisi', 'judul', 'isi', 'kategori', 'lampiran', 'nomor_wa', 'sifat', 'status', 'progress'
    ];
}
