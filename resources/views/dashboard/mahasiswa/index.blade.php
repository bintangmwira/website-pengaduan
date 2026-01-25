@extends('layouts.main')

@section('content')
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', sans-serif;
        }

        .page-wrapper {
            padding: 48px 56px 8px;
        }

        /* ===== LEFT (WELCOME) ===== */
        .welcome-section {
            padding-right: 24px;
        }

        .welcome-text {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 12px;
        }

        .hero-title {
            font-size: 24px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 12px;
        }

        .hero-desc {
            font-size: 14px;
            color: #6b7280;
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .img-dashboard img {
            max-width: 100%;
        }

        /* ===== CARD FORM ===== */
        .custom-card {
            background: #ffffff;
            border-radius: 8x;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
            padding: 24px;
        }

        .form-title {
            font-size: 16px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 16px;
        }

        /* ===== FORM ===== */
        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
        }

        .form-control,
        .form-select {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            padding: 10px 14px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #525AF9;
            box-shadow: none;
        }

        textarea.form-control {
            resize: none;
        }

        /* ===== BUTTON ===== */
        .btn-ungu {
            background-color: #525AF9;
            color: #ffffff;
            font-weight: 600;
            border-radius: 10px;
            padding: 12px;
        }

        .btn-ungu:hover {
            background-color: #6366f1;
            color: #ffffff;
        }

        /* ===== IMAGE PREVIEW ===== */
        #imagePreview {
            display: none;
            margin-top: 10px;
            max-width: 180px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .page-wrapper {
                padding: 24px;
            }

            .welcome-section {
                margin-bottom: 32px;
                padding-right: 0;
            }
        }
    </style>

    <div class="page-wrapper">
        <div class="row g-4">

            <!-- ===== LEFT : WELCOME (4) ===== -->
            <div class="col-md-4">
                <div class="welcome-section">
                    <div class="welcome-text">
                        Halo, <strong>{{ auth()->user()->name }}</strong> 👋
                    </div>

                    <div class="hero-title">
                        Selamat Datang di Website Pengaduan
                    </div>

                    <p class="hero-desc">
                        Sampaikan laporan atau keluhan Anda dengan mudah dan cepat.
                        Setiap laporan akan diproses secara transparan dan bertanggung jawab.
                    </p>

                    <div class="img-dashboard">
                        <img src="{{ asset('assets/img/vector-1.png') }}" alt="Ilustrasi Pengaduan">
                    </div>
                </div>
            </div>

            <!-- ===== RIGHT : FORM (8) ===== -->
            <div class="col-md-8">
                <div class="custom-card">

                    <form action="{{ route('mahasiswa.pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-4">

                            <!-- LEFT FORM -->
                            <div class="col-md-6">
                                <div class="form-title">Form Laporan Pengaduan</div>

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">NPM</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->npm }}" disabled>
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
                                    <label class="form-label">Tingkat / Level</label>
                                    <select class="form-select" name="tingkat_kepentingan">
                                        <option value="">-- pilih level --</option>
                                        @foreach ($tingkat_kepentingan as $row)
                                            <option value="{{ $row }}">{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- RIGHT FORM -->
                            <div class="col-md-6 d-flex flex-column gap-3">

                                <div style="margin-top: 40px;">
                                    <label class="form-label">Keluhan</label>
                                    <textarea name="keluhan" class="form-control" rows="5" placeholder="Tuliskan keluhan anda"></textarea>
                                </div>

                                <div>
                                    <label class="form-label">Bukti</label>
                                    <input type="file" class="form-control" name="bukti" id="fileUpload"
                                        accept="image/*">

                                    <img id="imagePreview"
                                        style="display:none; margin-top:10px; max-width:180px; border-radius:8px;">
                                </div>


                                <button type="submit" class="btn btn-ungu mt-2">
                                    Kirim Laporan
                                </button>

                            </div>


                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first() }}
                            </div>
                        @endif
                    </form>

                </div>
            </div>

        </div>
    </div>

    <script>
        document.getElementById('fileUpload').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
