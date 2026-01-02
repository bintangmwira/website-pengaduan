<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function semuaLaporan()
    {
        return view('dashboard.mahasiswa.semuaLaporan');
    }
}
