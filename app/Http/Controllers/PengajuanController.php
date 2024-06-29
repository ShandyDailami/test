<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'jenis_pengajuan' => 'required',
            'prodi' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
            'keperluan' => 'required',
            'alasan' => 'required',
            'mahasiswa_id' => 'required'
        ]);

        Pengajuan::create($request->post());

        return redirect()->route('e-service/rekomendasi')->with('success', 'Pengajuan telah berhasil.');
    }

    public function showMahasiswa(Mahasiswa $mahasiswa)
    {
        $mahasiswa = Auth::user();

        return view('pengajuan', compact('mahasiswa'));
    }

    public function show(Pengajuan $pengajuan)
    {
        $pengajuans = Pengajuan::all();

        if ($pengajuans->isEmpty()) {
            $pesan = "Belum ada pengajuan";
            return view('rekomendasi', compact('pesan'));
        } else {
            return view('rekomendasi', compact('pengajuans'));
        }
    }
}
