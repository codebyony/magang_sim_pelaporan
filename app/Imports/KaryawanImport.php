<?php

namespace App\Imports;

use App\Models\Karyawan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KaryawanImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // \Log::info('Row Data:', ['row' => $row]);
            Karyawan::create([
                'NIP' => $row['nip'],
                'nama' => $row['nama'],
                'divisi' => $row['divisi'],
                'password' => bcrypt($row['password']),
            ]);
        }
    }
}
