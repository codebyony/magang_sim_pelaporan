<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;
use App\Imports\KaryawanImport;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('login');
    }

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

    // Ganti Progress
    public function gantiProgress($id, Request $request){
        $laporan = Laporan::where('id', $id)->first();
    	$laporan->progress = $request->progress;
        $laporan->update();

        session()->flash('successs', 'Data updated successfully');
    }

    public function export(){
        return Excel::download(new LaporanExport, 'laporanKritikSaran.xlsx');
    }

    // UPLOAD EXCEL

    // Interface Upload
    public function uploadInterface(){
        return view('backend.Excel.index',[
            'judul' => 'Tambah Data Karyawan'
        ]);
    }

    // Upload File
    public function uploadFile(Request $request){
        ini_set('max_execution_time', 600);
        try {
            Excel::import(new KaryawanImport, request()->file('file'));
            session()->flash('upload_success', 'Data uploaded successfully');
        } catch (\Exception $e) {
            // Log the exception or dump it for debugging
            \Log::error($e->getMessage());
            dd($e);
        }
        return redirect('/dashboard');
    }
}
