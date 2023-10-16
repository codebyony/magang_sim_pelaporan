<?php

namespace App\Exports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LaporanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Laporan::where('status','Diverifikasi')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'NIP',
            'nama_karyawan',
            'divisi',
            'judul',
            'isi',
            'kategori',
            'lampiran',
            'nomor_wa',
            'sifat',
            'status',
            'created_at',
            'updated_at'
        ];
    }
}
