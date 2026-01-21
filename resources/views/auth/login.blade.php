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
                background: #F6F5FB;
                font-family: "Poppins", sans-serif;
            }
            .card {
                width: 350px;
                background: #ffffffee;
                padding: 32px 28px;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0 8px 20px rgba(0,0,0,0.15);
                backdrop-filter: blur(6px);
                border: none;
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
                font-size: 14px;
                color: #a9a9a9;
                margin-top: -10px;
            }
            p.sub-header {
                font-size: 18px;
                color: #1F2937;
                font-weight: 600;
            }
            form{
                margin-top: -14px;
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
                width: 50%;
                margin-top: 18px;
                padding: 12px;
                background: #4D9050;
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

        <p class="sub-header">Selamat Datang</p>
        <p class="subtitle">Silakan masuk terlebih dahulu untuk masuk ke beranda</p>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Masukkan email anda" />
            </div>

            <div class="input-group">
                <label>Kata Sandi</label>
                <input type="password" name="password" placeholder="Masukkan kata sandi" />
            </div>

            <div class="options">
                <label><input type="checkbox" />Ingat</label>
                <a href="#" style="font-size: 12px; color: #555">Lupa Kata Sandi?</a>
            </div>

            <button class="btn" type="submit">Masuk</button>
        </form>
    </div>

</body>
</html>


    
