<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Ruang Budaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Merriweather:wght@300;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f3f3f3;
        }

        .register-section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            position: relative;
            background-color: #8b4c39;
            padding-top: 0;
        }

        .banner {
            position: relative;
            width: 100%;
            height: 50vh;
            overflow: hidden;
        }

        .banner-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 2;
            padding: 0 15px;
            font-family: 'Merriweather', serif;
        }

        .banner-text h1 {
            font-size: 2.2rem;
            font-weight: bold;
        }

        .banner-text p {
            font-size: 1.1rem;
            font-weight: 500;
            margin-top: 10px;
        }

        .register-box {
            background: white;
            padding: 30px 25px;
            width: 100%;
            max-width: 450px;
            border-radius: 15px;
            margin: -80px auto 0;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .register-box input {
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 1rem;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .register-box button {
            background-color: #8b4c39;
            color: white;
            font-weight: bold;
            border: none;
            padding: 12px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .register-box button:hover {
            background-color: #a0563f;
        }

        .decor-left,
        .decor-right {
            position: absolute;
            width: 500px;
            bottom: 20px;
            z-index: 0;
        }

        .decor-left {
            left: 10%;
        }

        .decor-right {
            right: 10%;
            transform: scaleX(-1);
        }
    </style>
</head>
<body>

    <section class="register-section">
        <div class="banner">
            <img src="/images/latar_login_regis.jpg" class="banner-img" alt="Banner Ruang Budaya">
            <div class="banner-text">
                <h1>Selamat Datang<br>Di Ruang Budaya</h1>
                <p>Daftar dan Mulailah Eksplore!</p>
            </div>
        </div>

        <div class="register-box">
            <form method="POST" action="{{ route('signup.submit') }}">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" required>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                <button type="submit" class="w-100 mt-2">Register</button>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login.show') }}" class="text-decoration-none fw-bold text-dark">Login</a></p>
        </div>

        <img src="/images/ornamen2.png" class="decor-left" alt="dekorasi kiri">
        <img src="/images/ornamen2.png" class="decor-right" alt="dekorasi kanan">
    </section>

</body>
</html>
