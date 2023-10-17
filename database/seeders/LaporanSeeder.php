<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporans')->insert([
            [
                'NIP' => '19203819381',
                'nama_karyawan' => 'Ani Wulandari',
                'divisi' => 'Kapal Niaga',
                'judul' => 'Ruang Terbatas',
                'isi' => 'Jumlah karyawan yang bekerja di ruang kantor Departemen Corporate Communication terlalu banyak, sehingga menimbulkan ketidaknyamanan dalam bekerja',
                'kategori' => 'Lingkungan Kerja',
                'lampiran' => 'uploads/laporans/images1.jpeg',
                'nomor_wa' => '081293839849',
                'sifat' => 'Normal',
                'status' => 'Belum Diverifikasi',
            ],
            [
                'NIP' => '11829817382',
                'nama_karyawan' => 'Safwan Farraz Zuhair',
                'divisi' => 'Kapal Selam',
                'judul' => 'Ketidakjelasan Pekerjaan',
                'isi' => 'Sebaiknya setiap orang di perusahaan diberi penekanan lagi terkait hal-hal penting yang perlu dilakukan untuk menghindari pekerjaan yang tumpang tindih',
                'kategori' => 'Lingkungan Kerja',
                'lampiran' => 'uploads/laporans/laporan1.pdf',
                'nomor_wa' => '089828918291',
                'sifat' => 'Rahasia',
                'status' => 'Diverifikasi',
            ],
        ]);
    }
}
