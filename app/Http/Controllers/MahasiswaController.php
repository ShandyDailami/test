<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{

    public function daftar()
    {
        return view('user/daftar');
    }
    public function daftar_aksi(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nim' => 'required',
            'no_telpon' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);

        $mhs = new Mahasiswa([
            'nama_lengkap' => $request->nama_lengkap,
            'nim' => $request->nim,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'masuk_sebagai' => $request->masuk_sebagai,
            'password' => Hash::make($request->password),
        ]);
        $mhs->save();

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }

    public function login()
    {
        return view('user/login');
    }
    public function login_aksi(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['nim' => $request->nim, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'password' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}

