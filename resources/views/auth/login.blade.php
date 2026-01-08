<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
    <style>
            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: url('https://images.unsplash.com/photo-1519682337058-a94d519337bc') no-repeat center/cover;
                font-family: "Poppins", sans-serif;
            }
            .card {
                width: 360px;
                background: #ffffffee;
                padding: 32px 28px;
                border-radius: 18px;
                text-align: center;
                box-shadow: 0 8px 20px rgba(0,0,0,0.15);
                backdrop-filter: blur(6px);
            }
            .logo {
                max-width: 200px;
                margin: 0 auto 14px;
                border-radius: 50%;
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .logo img {
                width: 100%;
            }
            h2 {
                margin: 0;
                font-size: 20px;
                font-weight: 600;
            }
            p.subtitle {
                margin-top: 4px;
                font-size: 14px;
                color: #666;
            }
            .input-group {
                text-align: left;
                margin-top: 16px;
            }
            label {
                font-size: 14px;
                color: #444;
            }
            input {
                width: 100%;
                padding: 10px;
                margin-top: 6px;
                border-radius: 8px;
                border: 1px solid #ddd;
                background: #f4f4f4;
                font-size: 13px;
            }
                .options {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 8px;
            }

            .options label {
                display: flex;
                align-items: center;
                gap: 6px; /* jarak antara checkbox dan teks */
                font-size: 13px;
                color: #555;
            }

            .btn {
                width: 100%;
                margin-top: 18px;
                padding: 12px;
                background: #c77dff;
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 15px;
                cursor: pointer;
            }
    </style>
<body class="d-flex justify-content-center align-items-center">

    <div class="card">
        <div class="logo">
            <img src="/assets/img/logo-wp-new.png" alt="Logo WP"  />
        </div>

        {{-- <h2>Selamat Datang</h2>
        <p class="subtitle">Silakan masuk terlebih dahulu untuk ke Website Pengaduan</p> --}}

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label>email</label>
                <input type="text" name="email" placeholder="Masukkan email anda" />
            </div>

            <div class="input-group">
                <label>kata sandi</label>
                <input type="password" name="password" placeholder="Masukkan kata sandi" />
            </div>

            <div class="options">
                <label><input type="checkbox" />Ingat </label>
                <a href="#" style="font-size: 12px; color: #555">Lupa Kata Sandi?</a>
            </div>

            <button class="btn" type="submit">Masuk</button>
        </form>
    </div>

</body>
</html>


    
