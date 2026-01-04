<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;

class MahasiswaController extends Controller
{
    public function showFormPengaduan(){
        $kategori = ['fasilitas', 'akademik', 'keamanan', 'lainnya'];
        $tingkat_kepentingan = ['cukup_penting', 'penting', 'sangat_penting'];

        return view('dashboard.mahasiswa.index', compact('kategori', 'tingkat_kepentingan'));
    }

    public function storeFormPengaduan(Request $request){
        $request->validate([
            'kategori' => 'required|in:fasilitas,akademik,keamanan,lainnya',
            'keluhan' => 'required',
            'tingkat_kepentingan' => 'required|in:cukup_penting,penting,sangat_penting',
            'bukti' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $uploaded = null;

        if ($request->hasFile('bukti')) {
            $uploaded = $request->file('bukti')->store('pengaduan', 'public');
        }

        Pengaduan::create([
            'user_id' => Auth::id(), 
            'kategori' => $request->kategori,
            'keluhan' => $request->keluhan,
            'tingkat_kepentingan' => $request->tingkat_kepentingan,
            'bukti' => $uploaded,
            'status' => 'diterima', 
        ]);

        return redirect()->route('mahasiswa.semua.laporan')->with('success', 'Pengaduan berhasil dikirim');
    }

    public function allLaporan()
    {
        return view('dashboard.mahasiswa.all-laporan');
    }

    
}
