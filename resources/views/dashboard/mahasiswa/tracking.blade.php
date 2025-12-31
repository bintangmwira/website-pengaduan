@extends('layouts.main')
@section('content')

<style>
    .custom-card {
        border: none;
        border-radius: 14px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .bg-purple {
        background-color: #7c5cff;
    }

    .status-icon {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    color: #fff;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .timeline {
        position: relative;
        margin: 0 auto;
        padding: 20px 0;
        width: 100%;
    }

    .timeline::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;               
        transform: translateX(-50%);
        width: 3px;
        background: #cbd5e1;      
        z-index: 1;
    }


    .timeline-item {
        position: relative;
        margin: 50px 0;
    }

    .timeline-item .dot {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 26px;
        height: 26px;
        background: #7c5cff;      
        border-radius: 50%;
        border: 4px solid #fff;   
        z-index: 3;
    }

    .timeline-item .card {
        position: relative;
        z-index: 2;
        width: 75%;
        margin-left: 60%;       
    }

</style>

<div class="container my-5">
  <div class="row">


    <div class="col-md-6">
      <div class="card custom-card p-3">
        <div class="d-flex align-items-center mb-2">
          <span class="status-icon bg-purple me-2">✓</span>
          <h6 class="mb-0 fw-semibold">Laporan Diterima</h6>
        </div>

        <p class="fw-semibold mb-1">Kevin Gunawan</p>
        <small class="text-muted d-block">Selasa, 23 Desember 2025 10:50</small>

        <div class="mt-2">
          <small class="text-muted">Kategori:</small>
          <span>Fasilitas Kampus</span>
        </div>

        <div class="mt-1">
          <small class="text-muted">ID Laporan:</small>
          <span>12345678</span>
        </div>

        <span class="badge bg-danger mt-2 align-self-start">Cukup Penting</span>

        <p class="mt-3 mb-1 text-muted">
          Proyektor di ruangan 403 tidak bisa dinyalakan.
          <a href="#">Lihat bukti</a>
        </p>
      </div>
    </div>


    <div class="col-md-4 ">
        <div class="timeline">

            <div class="timeline-item">
                <span class="dot" style="background:#a78bfa"></span>
                <div class="card custom-card p-3">
                    <h6 class="fw-semibold">Laporan Diterima</h6>
                    <small class="text-muted">Selasa, 23 Desember 2025 10:50</small>
                    <p class="mt-2 text-muted">Proyektor tidak bisa dinyalakan.</p>
                </div>
            </div>

            <div class="timeline-item">
                <span class="dot" style="background:#38bdf8"></span>
                <div class="card custom-card p-3">
                    <h6 class="fw-semibold">Laporan Diproses</h6>
                    <small class="text-muted">12:00</small>
                    <p class="mt-2 text-muted">Teknisi sedang memperbaiki proyektor.</p>
                </div>
            </div>

            <div class="timeline-item">
                <span class="dot" style="background:#4ade80"></span>
                <div class="card custom-card p-3">
                    <h6 class="fw-semibold">Selesai Ditangani</h6>
                    <small class="text-muted">15:50</small>
                    <p class="mt-2 text-muted">Proyektor selesai diperbaiki.</p>
                </div>
            </div>

        </div>
    </div>

  
  </div>
</div>


@endsection