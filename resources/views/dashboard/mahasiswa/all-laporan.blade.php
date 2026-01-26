@extends('layouts.main')

@section('content')
    <style>
        body {
            background: #ffffff;
            font-family: 'Segoe UI', sans-serif;
        }

        .wrapper {
            padding: 10px 40px 40px 40px;
        }

        .laporan-container {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 24px;
            margin-top: 30px;
        }

        /* ================= RINCIAN (MINIMALIS) ================= */
        .card-rincian {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            max-height: 330px;
            padding-bottom: 8px;
        }

        .card-header-rincian {
            background: transparent;
            color: #111827;
            padding: 14px 20px 10px 20px;
            font-weight: 600;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 10px;
        }

        .card-header-rincian i {
            color: #525AF9;
            font-size: 16px;
        }

        .isi-card {
            padding: 0 20px;
            font-size: 13.5px;
            color: #374151;
        }

        .rincian-row {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .rincian-row strong {
            font-weight: 500;
            color: #111827;
        }

        /* Status */
        .status-row {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
            color: #16a34a;
            margin-bottom: 12px;
        }

        .status-row i {
            font-size: 14px;
        }

        /* Badge */
        .badge {
            background: #fee2e2;
            color: #b91c1c;
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 999px;
        }

        /* Deskripsi */
        .deskripsi {
            margin-top: 10px;
            font-size: 13px;
            color: #4b5563;
        }


        /* ================= ALL REQUESTS ================= */
        .all-requests h3 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 12px;
        }

        .search-wrapper {
            position: relative;
            width: 100%;
        }

        .search-wrapper i {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            color: #9e9e9e;
            font-size: 16px;
            pointer-events: none;
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: #fff;
        }

        .search-box i {
            color: #6b7280;
            font-size: 16px;
        }

        .search-input {
            width: 100%;
            padding: 12px 16px 12px 42px;
            border-radius: 6px;
            border: none;
            background: #f3f3f3;
            font-size: 14px;
            color: #333;
        }

        .search-input::placeholder {
            color: #9e9e9e;
        }

        .search-input:focus {
            outline: none;
            background: #ededed;
        }

        /* ================= CATEGORY FILTER ================= */
        .category-wrapper {
            margin-top: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .category-label {
            font-size: 13px;
            font-weight: 600;
            color: #374151;
        }

        .category-list {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .category-item {
            padding: 6px 12px;
            font-size: 12.5px;
            border-radius: 8px;
            background: #f3f4f6;
            color: #374151;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid transparent;
        }

        .category-item:hover {
            background: #e5e7eb;
        }


        /* ================= REQUEST LIST ================= */
        .request-list {
            margin-top: 16px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .request-card {
            background: #f6f7f9;
            border-radius: 10px;
            padding: 14px 18px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            min-height: 100px;
        }

        .request-left {
            display: flex;
            gap: 14px;
        }

        .request-number {
            font-weight: 600;
            color: #111827;
            width: 20px;
        }

        .request-content {
            font-size: 14px;
            color: #374151;
            max-width: 600px;
        }

        .request-status {
            margin-top: 6px;
        }

        .status-badge {
            background: #ec4899;
            color: #ffffff;
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 6px;
        }

        .request-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .update-btn {
            background: #4f46e5;
            color: #ffffff;
            border: none;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            cursor: pointer;
        }

        .update-btn:hover {
            background: #4338ca;
        }

        .dropdown-btn {
            background: transparent;
            border: none;
            font-size: 16px;
            cursor: pointer;
            color: #6b7280;
        }
    </style>

    <div class="wrapper">

        <div class="laporan-container">

            <!-- RINCIAN -->
            <div class="card-rincian">
                <div class="card-header-rincian">
                    <i class="bi bi-info-circle"></i>
                    Rincian Status
                </div>

                <div class="isi-card">
                    <div class="status-row">
                        <i class="bi bi-check-circle-fill"></i>
                        Laporan Diterima
                    </div>

                    <div class="rincian-row"><strong>Pelapor</strong>: Kevin Gunawan</div>
                    <div class="rincian-row"><strong>Tanggal</strong>: Selasa, 23 Desember 2025</div>
                    <div class="rincian-row"><strong>Kategori</strong>: Fasilitas Kampus</div>
                    <div class="rincian-row"><strong>ID Laporan</strong>: 12345678</div>

                    <div class="rincian-row">
                        <strong>Prioritas</strong>:
                        <span class="badge">Tinggi</span>
                    </div>

                    <div class="deskripsi">
                        Proyektor di ruangan 403 tidak bisa dinyalakan.
                    </div>
                </div>
            </div>


            <!-- SEMUA LAPORAN -->
            <div>
                <h3>Semua Laporan</h3>
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" class="search-input" placeholder="Type here to search">
                </div>
                <div class="category-wrapper">
                    <div class="category-label">Category</div>
                    <div class="category-list">
                        <div class="category-item active">Equipment</div>
                        <div class="category-item">Security audit</div>
                        <div class="category-item">Tool access</div>
                    </div>
                </div>

                <div class="request-list">

                    <div class="request-card">
                        <div class="request-left">
                            <div class="request-number">1</div>

                            <div class="request-content">
                                Hi, I just joined this week. Could you give me access to Softr as a collaborator?
                                <div class="request-status">
                                    <span class="status-badge">Done</span>
                                </div>
                            </div>
                        </div>

                        <div class="request-right">
                            <button class="update-btn">Update</button>
                            <button class="dropdown-btn">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
