<?php

namespace App\Exports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class LaporanExport implements FromQuery, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function query()
    {
        return Laporan::where('status', 'Diverifikasi');
    }

    public function headings(): array
    {
        return [
            'No. ',
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

    protected $urutan = 1;

    public function map($row): array
    {
        $urutan = $this->urutan; // Mengambil nilai urutan saat ini
        $this->urutan++; // Menambahkan urutan untuk baris berikutnya

        return [
            $urutan,
            $row->NIP,
            $row->nama_karyawan,
            $row->divisi,
            $row->judul,
            $row->isi,
            $row->kategori,
            $row->lampiran,
            $row->nomor_wa,
            $row->sifat,
            $row->status,
            $row->created_at,
            $row->updated_at
            // Tambahkan pemetaan untuk kolom-kolom lain di sini
        ];
    }
}
