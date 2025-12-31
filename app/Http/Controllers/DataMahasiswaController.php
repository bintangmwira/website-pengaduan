<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DataMahasiswaController extends Controller
{

    public function index()
    {
       $mahasiswa = User::where('role', 'mahasiswa')->get();

        return view('dashboard.admin.data-mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('dashboard.admin.data-mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'npm'   => 'required',
            'email' => 'required',
        ]);

        User::create([
            'name'     => $request->name,
            'npm'      => $request->npm,
            'email'    => $request->email,
            'role'     => 'mahasiswa',
            'password' => bcrypt($request->npm), 
        ]);

        return redirect()->route('data-mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $mahasiswa = User::find($id);
        return view('dashboard.admin.data-mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'npm'   => 'required|unique:users,npm,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        User::where('id', $id)
            ->where('role', 'mahasiswa')
            ->update([
                'name'  => $request->name,
                'npm'   => $request->npm,
                'email' => $request->email,
            ]);

        return redirect()->route('data-mahasiswa.index')
                        ->with('success', 'Data mahasiswa berhasil diperbarui');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('data-mahasiswa.index');
    }
}
