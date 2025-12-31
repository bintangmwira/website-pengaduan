@extends('layouts.master')
@section('content')

<style>
.content {
    margin-left: 270px; 
    margin-right: 20px;
    margin-top: 34px;
}
</style>


<div class="content">
 <div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Tambah Data Mahasiswa</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('data-mahasiswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama mahasiswa" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email mahasiswa" required>
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="{{ route('data-mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>
</div>

   
    

@endsection


