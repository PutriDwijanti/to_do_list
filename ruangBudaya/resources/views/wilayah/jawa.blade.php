<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wilayah Jawa - Ruang Budaya</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Merriweather:wght@300;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      font-family: 'Poppins', sans-serif;
      background-color: #76453b;
    }

    .col-8 div {
      width: 100%;
      height: 200px;
      overflow: hidden;
    }

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
      z-index: 2;
    }

    .p-3.mb-1::after,
    .p-3:not(.text-white)::after {
      content: attr(data-nama);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
      pointer-events: none;
    }

    .p-3 {
      position: relative;
      z-index: 1;
      cursor: pointer;
    }

    .logo-kecil {
      position: absolute;
      top: 10px;
      left: 20px;
      color: white;
      font-size: 14px;
      font-weight: 300;
      opacity: 0.7;
    }

    .judul-besar {
      color: white;
      font-size: 26px;
      font-weight: 600;
      margin-top: 40px;
      margin-bottom: -120px;
    }

    .ornamen img {
      width: 1000px;
      pointer-events: none;
    }

    .ornamen-kiri {
      position: fixed;
      bottom: 0;
      left: 0;
      z-index: 1000;
      width: 120px;
      opacity: 0.8;
    }

    .ornamen-kanan {
      position: fixed;
      bottom: 0;
      right: 0;
      z-index: 1000;
      width: 120px;
      opacity: 0.8;
    }

    .mirror {
      transform: scaleX(-1);
    }

    .menu-toggle {
      position: absolute;
      top: 15px;
      right: 20px;
      z-index: 1050;
    }

    .logo {
      position: absolute;
      left: 150px;
      bottom: 35px;
      height: 60%;
      width: auto;
      z-index: 2;
    }

    /* Side Menu */
    .side-menu {
      position: fixed;
      top: 0;
      right: -260px;
      height: 100%;
      width: 220px;
      background-color: #3e1f1a;
      padding: 40px 20px;
      box-shadow: -4px 0 8px rgba(0, 0, 0, 0.3);
      transition: right 0.3s ease;
      z-index: 1051;
      border-radius: 20px 0 0 20px;
    }

    .side-menu.active {
      right: 0;
    }

    .side-menu h5 {
      color: white;
      font-family: 'Merriweather', serif;
      font-weight: bold;
      font-size: 20px;
      margin-bottom: 20px;
      text-align: center;
    }

    .side-menu a {
      display: block;
      color: white;
      padding: 8px 0;
      text-decoration: none;
      border-bottom: 1px solid white;
      font-size: 14px;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.3);
      display: none;
      z-index: 1050;
    }

    .overlay.active {
      display: block;
    }

    @media (max-width: 991.98px) {
      .logo,
      .ornamen {
        display: none !important;
      }

      .judul-besar {
        font-size: 20px;
        margin-top: 40px;
      }

      .side-menu {
        width: 180px;
      }

      .side-menu h5 {
        font-size: 16px;
      }

      .side-menu a {
        font-size: 13px;
      }
    }

    @media (max-width: 576px) {
      .judul-besar {
        font-size: 18px;
      }

      .side-menu h5 {
        font-size: 15px;
      }

      .side-menu a {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>
  <div class="logo-kecil">Ruang Budaya</div>

  <div class="menu-toggle">
    <button class="btn btn-outline-light" id="toggleMenuBtn">☰</button>
  </div>

  <div class="overlay" id="overlay"></div>

  <div class="side-menu" id="sideMenu">
    <h5>Ruang Budaya</h5>
    <a href="#">Dashboard</a>
    <a href="#">Akun</a>
    <a href="#">Logout</a>
  </div>

  <div class="container text-center">
    <div class="row">
  
      <div class="col-2 d-flex flex-column justify-content-between">
        <div class="ornamen ornamen-kiri">
          <img src="/images/ornamen1.png" alt="">
        </div>
      </div>

      <div class="col-8">
        <div class="judul-besar">Pilih Wilayah Jawa Yang <br> Ingin Anda Kunjungi</div>
        <div class="p-3 mb-1" data-nama="Jawa Barat">
          <img class="logo" src="/images/logo-jabar.png" alt="Logo JawaBarat">
          <a href="/wilayah/jawaBarat/index.blade.php"><img src="/images/jawaBarat.jpg" alt="JawaBarat"></a>
        </div>
        <div class="p-3 mb-1" data-nama="Jawa Tengah">
          <img class="logo" src="/images/logo-jateng.png" alt="Logo Jawa Tengah">
          <img src="/images/jawaTengah.jpg" alt="JawaTengah">
        </div>
        <div class="p-3" data-nama="Jawa Timur">
          <img class="logo" src="/images/logo-jatim.png" alt="Logo Jawa Timur">
          <img src="/images/jawaTimur.jpg" alt="Jawa Timur">
        </div>
      </div>

      <div class="col-2 d-flex flex-column justify-content-between">
        <div class="ornamen ornamen-kanan mirror">
          <img src="/images/ornamen1.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <script>
    const toggleBtn = document.getElementById('toggleMenuBtn');
    const sideMenu = document.getElementById('sideMenu');
    const overlay = document.getElementById('overlay');

    toggleBtn.addEventListener('click', () => {
      sideMenu.classList.toggle('active');
      overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
      sideMenu.classList.remove('active');
      overlay.classList.remove('active');
    });

     // Klik gambar untuk pindah halaman
      document.addEventListener("DOMContentLoaded", function () {
    const wilayahElements = document.querySelectorAll(".p-3");

    wilayahElements.forEach((el) => {
      el.style.cursor = "pointer";
      const namaWilayah = el.getAttribute("data-nama");

      el.addEventListener("click", function () {
  const slugWilayah = namaWilayah.toLowerCase().replace(/\s+/g, '-'); 
  window.location.href = `/pulau/jawa/${slugWilayah}`;
});

    });
  });

  </script>
</body>
</html>
