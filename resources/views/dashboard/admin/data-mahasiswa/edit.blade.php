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
        <h5 class="mb-0">Ubah Data Mahasiswa</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('data-mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $mahasiswa->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" value="{{ $mahasiswa->npm }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}" required>
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>
</div>

   
    

@endsection


