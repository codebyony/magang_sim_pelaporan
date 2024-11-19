<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.page-starter', [
            'laporan' => Laporan::all(),
        ]);
    }

    public function show($id)
    {
        return view('frontend.page-starter', [
            'laporan' => Laporan::all(),
            'jumlah' => Laporan::where('NIP', '=', $id)->count(),
        ]);
    }

    public function tabel($id)
    {
        return view('frontend.laporan', [
            'tabel' => Laporan::where('NIP', '=', $id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'NIP' => 'required|min:8|numeric',
            'nama_karyawan' => 'required',
            'divisi' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'lampiran' => 'required|image|file|max:1024',
            'nomor_wa' => 'required|numeric|min:11',
            'sifat' => 'required',
        ]);
        
        $lampiran = $request->lampiran; 
        $slug = ($lampiran->getClientOriginalName());
        $new_lampiran = time() .'_'. $slug.'.' . $lampiran->getClientOriginalExtension();
        $lampiran->move('uploads/laporans/' ,$new_lampiran);
        // dd($request->lampiran);
        $validate['lampiran'] = 'uploads/laporans/'.$new_lampiran;
        // $validate['sifat'] = "Normal";
        $validate['status'] = "Belum Diverifikasi";
        $validate['progress'] = "Waiting";

        // dd($validate);
        Laporan::create($validate);

        return redirect('/laporan/'.$request->session()->get('NIP'))->with('laporan_success','Data baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
