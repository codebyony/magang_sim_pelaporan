<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Buka Halaman Login
    public function index(){
        return view('Laporan.laporan',[
            'judul' => 'Laporan Karyawan',
            'item' => Laporan::all(),
        ]);
    }

    // Verifikasi Laporan
    public function verifikasiLaporan(){
        return view('Laporan.laporan',[
            'title' => 'Laporan Karyawan'
        ]);
    }

    // Auth : Menggunakan username dan password
    public function store(Request $request){
        $validatedData=$request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //jika username ada
        $user = DB::table('admins')->where('username', $request->username)->first();

        //jika password benar
        if($user){
            if(Hash::check($request->password,$user->password)){
                session([
                    'isLogin' => true,
                    'name' => $user->username,
                ]);
                // return redirect('/'.$request->role);
                return redirect('/dashboard');
            }
            //jika password salah
            return redirect('/auth')->with('error_password', 'Password Tidak Sesuai');
        }
        
        //jika username tidak ada
        return redirect('/auth')->with('error_username', 'Username Tidak Ditemukan');
        // $credentials = $request->only('NIP', 'password');
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect('/kegiatan');
        // }
        // return Redirect::to("auth")->with('Username atau password tidak sesuai!');
    }

    // Logout
    public function logout(){
        session()->flush();
        return redirect('/logout');
    }

    // Buka Halaman Login
    public function logoutPage(){
        return view('Autentikasi.logout',[
            'title' => 'Halaman Logout'
        ]);
    }
}
