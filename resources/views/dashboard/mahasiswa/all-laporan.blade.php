@extends('layouts.main')
@section('content')
    <style>
        body {
            background: #f5f6fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .wrapper {
            padding: 10px 40px 40px 40px;
        }

        .laporan-container {
            display: grid;
            grid-template-columns: 1fr 1.2fr 1fr;
            gap: 24px;
            margin-top: 30px;
        }


        /* Riwayat */
        .card-riwayat {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            border: none;
            max-height: 330px;
        }

        .card-header-riwayat {
            background: #9b59b6;
            color: #fff;
            padding: 16px;
            border-radius: 12px 12px 0 0;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .isi-card {
            padding: 0 20px 0 20px;
        }

        .riwayat-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 0;
            font-weight: 500;
        }

        .riwayat-item.active {
            background: #f0e6f6;
            border-radius: 10px;
            padding: 10px;
        }

        .icon-check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #2ecc71;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .icon-process {
            background: #3498db;
        }

        .icon-purple {
            background: #9b59b6;
        }

        /* Tracking */
        .tracking-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 24px;
        }

        .tracking-item::before {
            content: '';
            position: absolute;
            left: 6px;
            top: 0;
            width: 12px;
            height: 12px;
            background: #9b59b6;
            border-radius: 50%;
        }

        .tracking-item::after {
            content: '';
            position: absolute;
            left: 11px;
            top: 12px;
            width: 2px;
            height: 100%;
            background: #ddd;
        }

        .tracking-item:last-child::after {
            display: none;
        }

        .tracking-card {
            background: #fff;
            border-radius: 14px;
            padding: 14px 16px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
        }

        .tracking-title {
            font-weight: 600;
            margin-bottom: 4px;
        }

        .tracking-date {
            font-size: 13px;
            color: #888;
            margin-bottom: 6px;
        }

        .tracking-link {
            color: #9b59b6;
            font-weight: 500;
            text-decoration: none;
        }

        /* Rincian */
        .card-rincian {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            border: none;
            max-height: 330px;
        }

        .card-header-rincian {
            background: #E6D4F0;
            color: #9b59b6;
            padding: 16px;
            border-radius: 12px 12px 0 0;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
            text-align: center;
            justify-content: center;
        }

        .isi-card {
            padding: 0 20px 0 20px;
        }

        .rincian-row {
            margin-bottom: 10px;
            font-size: 14px;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
            color: #fff;
            background: #e74c3c;
        }
    </style>

    <div class="wrapper">

        <div class="laporan-container">

            <!-- RIWAYAT -->
            <div class="card-riwayat">
                <div class="card-header-riwayat">Riwayat Laporan</div>

                <div class="isi-card">
                    <div class="riwayat-item">
                        <div class="icon-check">✓</div> Lift Rusak
                    </div>

                    <div class="riwayat-item">
                        <div class="icon-check">✓</div> Ubin Pecah
                    </div>

                    <div class="riwayat-item">
                        <div class="icon-check">✓</div> LMS Bug di HP
                    </div>

                    <div class="riwayat-item">
                        <div class="icon-check icon-process">⚙</div> AC Rusak
                    </div>

                    <div class="riwayat-item active">
                        <div class="icon-check icon-purple">✓</div> Proyektor Tidak Berfungsi
                    </div>

                </div>
            </div>

            <!-- TRACKING -->
            <div class="card">
                <div class="tracking-item">
                    <div class="tracking-card">
                        <div class="tracking-title">Laporan Diterima</div>
                        <div class="tracking-date">Selasa, 23 Desember 2025 10:50</div>
                        Proyektor di ruangan 403 tidak bisa dinyalakan.
                        <br>
                        <a href="#" class="tracking-link">Lihat Rincian...</a>
                    </div>
                </div>

                <div class="tracking-item">
                    <div class="tracking-card">
                        <div class="tracking-title">Laporan Diproses</div>
                        <div class="tracking-date">Selasa, 23 Desember 2025 12:00</div>
                        Teknisi sedang memperbaiki proyektor.
                        <br>
                        <a href="#" class="tracking-link">Lihat Rincian...</a>
                    </div>
                </div>

                <div class="tracking-item">
                    <div class="tracking-card">
                        <div class="tracking-title">Laporan Selesai Ditangani</div>
                        <div class="tracking-date">Selasa, 24 Desember 2025 10:50</div>
                        Proyektor sudah selesai diperbaiki.
                        <br>
                        <a href="#" class="tracking-link">Lihat Rincian...</a>
                    </div>
                </div>
            </div>

            <!-- RINCIAN -->
            <div class="card-rincian">
                <div class="card-header-rincian">
                    <i class="bi bi-info-circle"></i> Rincian Status
                </div>
                <div class="isi-card">
                    <div class="rincian-row"><i class="bi bi-check-circle-fill"></i> Laporan Diterima</div>
                    <div class="rincian-row"><strong>Pelapor:</strong> Kevin Gunawan</div>
                    <div class="rincian-row"><strong>Tanggal:</strong> Selasa, 23 Desember 2025</div>
                    <div class="rincian-row"><strong>Kategori:</strong> Fasilitas Kampus</div>
                    <div class="rincian-row"><strong>ID Laporan:</strong> 12345678</div>
                    <div class="rincian-row">
                        <strong>Prioritas:</strong>
                        <span class="badge">Tinggi</span>
                    </div>

                    <div class="rincian-row" style="margin-top:10px;">
                        Proyektor di ruangan 403 tidak bisa dinyalakan.
                        <a href="#" class="tracking-link">Lihat bukti</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
