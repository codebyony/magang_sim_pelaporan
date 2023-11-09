<?php

namespace App\Exports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class LaporanExport implements FromQuery, WithHeadings, WithMapping, WithStyles, WithCustomStartCell
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function query()
    {
        return Laporan::where('status', 'Diverifikasi');
    }

    public function startCell(): string
    {
        // Mulai dari sel A4 (baris 4 dan kolom A)
        return 'B4';
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
            'progress',
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
            $row->progress,
            $row->created_at,
            $row->updated_at
            // Tambahkan pemetaan untuk kolom-kolom lain di sini
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Menggabungkan sel untuk judul di baris pertama
        $sheet->mergeCells('B1:O2');
        $sheet->mergeCells('B3:O3');
        // Menambahkan judul di baris pertama
        $sheet->setCellValue('B1', 'LAPORAN KELUHAN/SARAN KARYAWAN PT. PAL INDONESIA');
        // Mengatur gaya judul
        $sheet->getStyle('B1')->getFont()->setBold(true); 
        $sheet->getStyle('B1')->getFont()->setSize(16);
        $sheet->getStyle('B1')->getAlignment()->applyFromArray([
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ]);
    }

}
