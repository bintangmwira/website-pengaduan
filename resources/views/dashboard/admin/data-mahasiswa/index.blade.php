@extends('layouts.master')
@section('content')

<style>
    .content {
    margin-left: 270px; 
    margin-right: 20px;
    margin-top : -14px;
}

.btn-tambah-data {
    background-color: #8e4fff;
    border-color: #8e4fff;
    color: #fff;
    font-weight: 500;
    padding: 6px 12px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.btn-tambah-data:hover {
    background-color: #a275f5;
    border-color: #9c6bf7;
    color: #fff;
}

.btn-ekspor-data {
    background-color: #5fce73;
    border-color: #6be080;
    color: #fff;
    font-weight: 500;
    padding: 6px 12px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.btn-ekspor-data:hover {
    background-color: #59bc6b;
    border-color: #64ce77;
    color: #fff;
}

.aksi-btn {
    display: flex;
    gap: 10px;
    justify-content: center;
}

.aksi-btn a,
.aksi-btn button {
    border: none;
    background: none;
    font-size: 18px;
    cursor: pointer;
}

.btn-edit {
    color: #f0ad4e; /* kuning */
}

.btn-edit:hover {
    color: #d39e00;
}

.btn-hapus {
    color: #dc3545; /* merah */
}

.btn-hapus:hover {
    color: #a71d2a;
}


</style>
    
    <a href="{{ route('data-mahasiswa.create') }}">tambah data mahasiswa</a>

    <div class="content">
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="mb-0">Data Mahasiswa</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('data-mahasiswa.create') }}" class="btn btn-tambah-data">
                Tambah Data <i class="bi bi-file-earmark-plus"></i>
            </a>
            <a href="#" class="btn btn-ekspor-data">
                Export Data <i class="bi bi-download"></i>
            </a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mhs->name }}</td>
                        <td>{{ $mhs->npm }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>
                            <div class="aksi-btn">
                                <a href="{{ route('data-mahasiswa.edit', $mhs->id) }}" class="btn-edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form id="hapus-{{ $mhs->id }}" action="{{ route('data-mahasiswa.destroy', $mhs->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn-hapus"
                                        onclick="konfirmasiHapus({{ $mhs->id }})">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function konfirmasiHapus(id) {
        Swal.fire({
            title: 'Yakin mau hapus?',
            text: 'Data mahasiswa akan dihapus permanen',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('hapus-' + id).submit();
            }
        });
    }
</script>

  
@endsection


