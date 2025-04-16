<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ruang Budaya - Cerita Rakyat Jawa Timur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
        }

        .main-container {
            background-color: #713d27;
            color: white;
            padding: 60px 100px;
            min-height: 100vh;
        }

        .menu-toggle {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 28px;
            color: white;
            cursor: pointer;
            z-index: 1001;
        }

        .search-box {
            background-color: white;
            border-radius: 30px;
            padding: 10px 20px;
            margin-top: 10px;
        }

        .search-box input {
            border: none;
            outline: none;
            width: 100%;
        }

        .card-story {
            background-color: #eeeeee;
            border-radius: 15px;
            padding: 15px 20px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #000;
            text-decoration: none;
        }

        .card-story:hover {
            background-color: #e0d2ca;
        }

        .card-story .title {
            font-weight: bold;
            color: #d88c00;
        }

        .card-story .region {
            font-size: 14px;
            color: #555;
        }

        .side-menu {
            position: fixed;
            top: 0;
            right: -300px;
            height: 100%;
            width: 260px;
            background-color: #43261e;
            padding: 40px 20px;
            box-shadow: -4px 0 8px rgba(0, 0, 0, 0.2);
            transition: right 0.3s ease;
            z-index: 1000;
            border-radius: 20px 0 0 20px;
        }

        .side-menu.active {
            right: 0;
        }

        .side-menu h5 {
            color: white;
            font-family: cursive;
            margin-bottom: 30px;
        }

        .side-menu a {
            display: block;
            color: white;
            font-size: 16px;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid white;
            text-decoration: none;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
            display: none;
            z-index: 999;
        }

        .overlay.active {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Toggle Menu -->
    <div class="menu-toggle">
        <i class="bi bi-list"></i>
    </div>

    <!-- Side Menu -->
    <div class="side-menu" id="sideMenu">
        <h5>Ruang Budaya</h5>
        <a href="#">Home</a>
        <a href="#">Akun</a>
        <a href="#">Logout</a>
    </div>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <div class="main-container">
        <h3 class="fw-bold">Ruang Budaya</h3>
        <h1 class="fw-bold mt-3">Cerita Rakyat Jawa Timur</h1>
        <p>Apa yang ingin kamu eksplor hari ini?</p>

        <div class="search-box mb-4 mt-3">
            <div class="d-flex align-items-center">
                <span class="me-2">🔍</span>
                <input type="text" placeholder="Cari cerita..." id="searchInput">
            </div>
        </div>

        <h5 class="fw-bold mt-4">Daftar Cerita</h5>
        <div id="ceritaContainer"></div>
    </div>

    <script>
        const ceritaRakyat = [
            { judul: "Damarwulan", asal: "Jawa Timur", slug: "damarwulan" },
            { judul: "Jaka Tingkir", asal: "Jawa Timur", slug: "jaka-tingkir" },
            { judul: "Reog Ponorogo", asal: "Jawa Timur", slug: "reog-ponorogo" },
            { judul: "Legenda Gunung Bromo", asal: "Jawa Timur", slug: "legenda-gunung-bromo" },
            { judul: "Ande-Ande Lumut", asal: "Jawa Timur", slug: "ande-ande-lumut" },
            { judul: "Roro Wilis", asal: "Jawa Timur", slug: "roro-wilis" }
        ];

        const container = document.getElementById('ceritaContainer');
        const searchInput = document.getElementById('searchInput');

        function renderCerita(list) {
            container.innerHTML = '';
            list.forEach(cerita => {
                const card = document.createElement('a');
                card.className = 'card-story';
                card.href = `/cerita-rakyat/jawa-timur/${cerita.slug}`;
                card.innerHTML = `
                    <div>
                        <div class="title">${cerita.judul}</div>
                        <div class="region">${cerita.asal}</div>
                    </div>
                    <i class="bi bi-arrow-right-circle"></i>
                `;
                container.appendChild(card);
            });
        }

        renderCerita(ceritaRakyat);

        searchInput.addEventListener('input', () => {
            const keyword = searchInput.value.toLowerCase();
            const filtered = ceritaRakyat.filter(c =>
                c.judul.toLowerCase().includes(keyword) ||
                c.asal.toLowerCase().includes(keyword)
            );
            renderCerita(filtered);
        });

        const toggle = document.querySelector('.menu-toggle');
        const sideMenu = document.getElementById('sideMenu');
        const overlay = document.getElementById('overlay');

        toggle.addEventListener('click', () => {
            sideMenu.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', () => {
            sideMenu.classList.remove('active');
            overlay.classList.remove('active');
        });
    </script>

</body>

</html>
