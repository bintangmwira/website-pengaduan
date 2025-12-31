<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
    body{
        background-color: #f0f0f0
    }

.sidebar {
    width: 250px;
    height: 100vh;
    background: #fff;
    border-right: 1px solid #eee;
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
}

.menu {
    flex-grow: 1; 
    list-style: none;
    padding: 0;
}

.logout-section {
    margin-top: auto; 
}

.sidebar-header {
    display: flex;
    align-items: center;
    gap: 10px; 
    margin-bottom: 30px;
}

.sidebar-logo {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.sidebar-title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
}


.brand {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
}

.menu-item {
    margin-bottom: 10px;
}

.menu-item a {
    display: flex;
    align-items: center;
    padding: 10px 12px;
    border-radius: 8px;
    text-decoration: none;
    color: #555;
    font-weight: 500;
    transition: 0.2s;
}

.menu-item a i {
    font-size: 18px;
    margin-right: 12px;
}

.menu-item a:hover{
    background: #efefef;
    color: #555;
}

.menu-item a.active {
    background: #f0e7ff;
    color: #8e4fff;
}

.logout-section {
    margin-top: auto; /* dorong ke bawah */
}

.logout-btn {
    width: 100%;
    display: flex;
    align-items: center;
    padding: 10px 12px;
    background: transparent;
    border: none;
    color: #d9534f;
    font-weight: 500;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
}

.logout-btn i {
    font-size: 18px;
    margin-right: 12px;
}

.logout-btn:hover {
    background: #ffe8e8;
    color: #c82333;
}


.topbar {
    margin-left: 270px; 
    margin-right: 20px;
    background: #fff;
    padding: 18px 20px;
    border-radius: 10px;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.welcome-text {
    font-size: 17px;
    color: #333;
    line-height: 1.2;
}

.welcome-text .subtitle {
    margin-top: 10px;
    font-size: 14px;
    color: #777;
}

.profile-img {
    width: 45px;
    height: 45px;
    border-radius: 100%;
    object-fit: cover;
    border: 3px solid #e6e1ff;
}


</style>

<body>

  
<div class="sidebar">

    <div class="sidebar-header d-flex align-items-center">
        <img src="{{ asset('assets/img/logo-wp.png') }}" alt="Logo" class="sidebar-logo">
        <span class="sidebar-title">Web Pengaduan</span>
    </div>

    <ul class="menu">

        @if(Auth::check() && (Auth::user()->role == 'admin'))
        <li class="menu-item">
            <a href="{{ route('dashboard.admin') }}"
            class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('data-mahasiswa.index') }}"
            class="{{ Request::is('data-mahasiswa*') ? 'active' : '' }}">
                <i class="bi bi-people"></i>
                <span>Data Mahasiswa</span>
            </a>
        </li>
        @endif

        @if(Auth::check() && (Auth::user()->role == 'mahasiswa'))
         <li class="menu-item">
            <a href=""
            class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @endif

    </ul>

    <div class="logout-section">
        <form id="form-logout" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="button" class="logout-btn" onclick="konfirmasiLogout()">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>


</div>


<div class="topbar">
    <div class="welcome-text">
        Hai, <strong>{{ auth()->user()->name }}</strong> 👋  
        <div class="subtitle">Selamat datang di Website Pengaduan!</div>
    </div>

    <div class="profile">
        <img src="{{ asset('assets/img/user.png') }}" class="profile-img">
    </div>
</div>


<div class="content-wrapper">

            @yield('content')


</div>

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