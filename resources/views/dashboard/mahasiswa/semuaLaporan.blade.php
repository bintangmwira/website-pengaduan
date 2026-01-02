@extends('layouts.main')
@section('content')

<style>
.report-card {
  background: #ffffff;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
  max-width: 900px;
  margin: 0 auto 14px auto;
}

.badge-process {
  background-color: #b38bff;
  color: #fff;
}

.badge-success {
  background-color: #4caf50;
  color: #fff;
}

.badge-received {
  background-color: #9c6ade;
  color: #fff;
}

.status-pill {
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 500;
}

.status-process {
  background-color: #ffe8a1;
  color: #856404;
}

/* Button ungu */
.btn-outline-purple {
  border-color: #9c6ade;
  color: #9c6ade;
}

.btn-outline-purple:hover {
  background-color: #9c6ade;
  color: #fff;
}

/* Pagination */
.page-item.active .page-link {
  background-color: #9c6ade;
  border-color: #9c6ade;
}

.page-link {
  color: #9c6ade;
}

.head-text{
    text-align: center;
    margin-top: -20px;
}

</style>

<div class="container my-5">
    <div class="head-text">
        <h4 class="fw-bold mb-2">Status Laporan</h4>
        <p class="mb-4">
            Halo, <strong>Bintang Mustika</strong> 👋 Berikut adalah riwayat laporan pengaduan Anda
        </p>
    </div>
  

  <!-- Card 1 -->
  <div class="report-card mb-3">
    <div class="d-flex justify-content-between align-items-start">
      <div>
        <span class="badge badge-process mb-2">Laporan Diproses</span>
        <h6 class="fw-semibold mt-2">Proyektor tidak menyala</h6>
        <p class="text-muted mb-1">
          ID Laporan: 12457 &nbsp;|&nbsp; Kategori: Fasilitas Kampus
        </p>
        <small class="text-muted">12 Januari 2026</small>
      </div>
      <div class="text-end">
        <span class="status-pill status-process mb-2 d-inline-block">
          Diproses ➜
        </span>
        <br />
        <button class="btn btn-outline-purple btn-sm mt-2">
          👁 Lihat Progress
        </button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="report-card mb-3">
    <div class="d-flex justify-content-between align-items-start">
      <div>
        <span class="badge badge-success mb-2">Laporan Selesai</span>
        <h6 class="fw-semibold mt-2">AC kelas rusak</h6>
        <p class="text-muted mb-1">
          ID Laporan: 12456 &nbsp;|&nbsp; Kategori: Fasilitas Kampus
        </p>
        <small class="text-muted">10 Januari 2026</small>
      </div>
      <div class="text-end">
        <button class="btn btn-outline-purple btn-sm mt-4">
          👁 Lihat Progress
        </button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="report-card mb-4">
    <div class="d-flex justify-content-between align-items-start">
      <div>
        <span class="badge badge-received mb-2">Laporan Diterima</span>
        <h6 class="fw-semibold mt-2">Kantin kotor</h6>
        <p class="text-muted mb-1">
          ID Laporan: 12430 &nbsp;|&nbsp; Kategori: Kebersihan
        </p>
        <small class="text-muted">5 Januari 2026</small>
      </div>
      <div class="text-end">
        <button class="btn btn-outline-purple btn-sm mt-4">
          👁 Lihat Progress
        </button>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="d-flex justify-content-between align-items-center">
    <small class="text-muted">1–3 dari 3</small>
    <nav>
      <ul class="pagination pagination-sm mb-0">
        <li class="page-item disabled">
          <a class="page-link">Prev</a>
        </li>
        <li class="page-item active">
          <a class="page-link">1</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>


@endsection