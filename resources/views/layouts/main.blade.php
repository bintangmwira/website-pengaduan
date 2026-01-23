<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Web Pengaduan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .profile-icon {
        width: 38px;
        height: 38px;
        color: #525AF9;
        font-size: 18px;
        text-decoration: none;
    }

    .profile-icon:hover {
        background-color: #f3f0ff;
    }

    .nav-item .nav-link {
        color: #1F2937 !important;
        font-weight: 400;
    }

    .nav-item .nav-link.active {
        color: #525AF9 !important;
        font-weight: 700;
    }

    .navbar {
        transition: box-shadow 0.3s ease;
    }


    .footer {
        background-color: #525AF9;
        color: #ffffff;
        text-align: center;
        padding: 12px 20px;
        font-size: 13px;
        line-height: 1.6;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('mahasiswa.pengaduan') }}">
                <img src="{{ asset('assets/img/logo-wp2.png') }}" alt="Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('mahasiswa.pengaduan') ? 'active' : '' }}"
                            href="{{ route('mahasiswa.pengaduan') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('mahasiswa.semua.laporan') ? 'active' : '' }}"
                            href="{{ route('mahasiswa.semua.laporan') }}">
                            Cek Laporan
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="d-flex align-items-center justify-content-center rounded-circle border profile-icon"
                        href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                Profil
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form id="form-logout" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="button" class="dropdown-item text-danger" onclick="konfirmasiLogout()">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <div class="content-wrapper">

        @yield('content')


    </div>


    <footer class="footer">
        <p>
            ©2025 Kelompok 2. All right reserved.<br>
            Jl. Rangga Gading No.1, Gudang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat, 16123.
            WA: 0813-1377-7672
        </p>
    </footer>

    <script>
        function konfirmasiLogout() {
            Swal.fire({
                title: 'Yakin mau logout?',
                text: 'Kamu akan keluar dari sesi login',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-logout').submit();
                }
            });
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>
