@extends('layouts.main')
@section('content')
    <style>
        .page-wrapper {
            padding: 40px;
        }

        .custom-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            height: 100%;
            padding: 18px 20px;
            border: none;
        }

        .btn-ungu {
            background-color: #9A5EB1;
            color: #fff;
            font-weight: 600;
        }

        .btn-ungu:hover {
            background-color: #995eb1d8;
            color: #fff;
        }

        @media (max-width: 768px) {
            .page-wrapper {
                padding: 20px;
            }
        }

        .img-dashboard {
            margin-top: 40px;
            text-align: center;
        }

        .img-dashboard img {
            max-width: 500px;
        }

        .welcome-text {
            margin-bottom: 20px;
        }
    </style>

    <div class="page-wrapper">
        <div class="row g-4 align-items-stretch">

            <div class="col-md-6 d-flex">
                <div class="w-100 px-md-4">

                    <div class="welcome-text">
                        Halo, <strong>{{ auth()->user()->name }}</strong> 👋
                    </div>

                    <h3 class="fw-bold mb-3">
                        Selamat Datang di Website Pengaduan!
                    </h3>

                    <p class="text-muted mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>

                    <div class="img-dashboard">
                        <img src="{{ asset('assets/img/vector-2.png') }}" alt="Ilustrasi Pengaduan">
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="mb-3">Form Laporan Pengaduan</h5>

                        <form action="{{ route('mahasiswa.pengaduan.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->name }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NPM</label>
                                <input type="text" class="form-control" placeholder="{{ auth()->user()->npm }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="kategori">
                                    <option value="">-- pilih kategori --</option>
                                    @foreach ($kategori as $row)
                                        <option value="{{ $row }}">{{ $row }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Keluhan</label>
                                <textarea name="keluhan" class="form-control" rows="4" placeholder="Tuliskan keluhan anda"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tingkat / Level</label>
                                <select class="form-select" name="tingkat_kepentingan">
                                    <option value="">-- pilih level --</option>
                                    @foreach ($tingkat_kepentingan as $row)
                                        <option value="{{ $row }}">{{ $row }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Bukti</label>
                                <input type="file" class="form-control" name="bukti" id="fileUpload" accept="image/*">
                                <img id="imagePreview" src=""alt="Preview Bukti"
                                    style="display:none; margin-top:10px; max-width:200px;">
                            </div>


                            <script>
                                document.getElementById('fileUpload').addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            document.getElementById('imagePreview').setAttribute('src', e.target.result);
                                            document.getElementById('imagePreview').style.display = 'block';
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                });
                            </script>

                            <button type="submit" class="btn btn-ungu w-100 mt-2">
                                Kirim Laporan
                            </button>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
