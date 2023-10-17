<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;

class AdminController extends Controller
{
    // Buka Halaman Login
    public function index(){
        return view('backend.Laporan.laporan',[
            'judul' => 'Laporan Karyawan',
            'item' => Laporan::all(),
        ]);
    }

    // Verifikasi Laporan
    public function verifikasiLaporan($id){
        $laporan = Laporan::where('id', $id)->first();
    	$laporan->status = 'Diverifikasi';
        $laporan->update();

        session()->flash('success_message', 'Data updated successfully');
        return redirect('/dashboard');
    }

    public function export(){
        return Excel::download(new LaporanExport, 'laporanKritikSaran.xlsx');
    }
}
