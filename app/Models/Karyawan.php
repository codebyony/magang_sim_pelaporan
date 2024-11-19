<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIP',
        'nama',
        'password',
        'divisi',
    ];

    protected $primaryKey = 'NIP';

    # Karyawan has many laporans
    public function laporans()
    {
        return $this->hasMany(Laporan::class);
    }
}
