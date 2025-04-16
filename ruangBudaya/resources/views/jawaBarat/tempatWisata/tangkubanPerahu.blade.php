<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tangkuban Perahu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f1f1;
      font-family: 'Segoe UI', sans-serif;
    }

    .header {
      background-color: #6d3d32;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .nav-icon {
      position: absolute;
      right: 20px;
      top: 20px;
      font-size: 24px;
      color: white;
      cursor: pointer;
      z-index: 1001;
    }

    .content {
      background-color: #6d3d32;
      padding: 20px;
    }

    .card-custom {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
    }

    .section-title {
      font-weight: bold;
    }

    .side-menu {
      position: fixed;
      top: 0;
      right: -260px;
      height: 100%;
      width: 240px;
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

  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <!-- Side Menu -->
  <div class="side-menu" id="sideMenu">
    <h5>Ruang Budaya</h5>
    <a href="#">Home</a>
    <a href="#">Akun</a>
    <a href="#">Logout</a>
  </div>

  <!-- Header -->
  <div class="header position-relative">
    <div class="fw-bold" style="position: absolute; left: 20px; top: 20px;">Ruang Budaya</div>
    <h4 class="mt-4">Tangkuban Perahu<br><small>Mari Mengenal Lebih Jauh</small></h4>
    <div class="nav-icon" id="toggleMenu">
      <i class="bi bi-list"></i>
    </div>
  </div>

  <div class="content text-center">
    <img src="gambar/Tangkuban_Perahu .jpg" class="img-fluid rounded" alt="Tangkuban Perahu" style="height: 400px; width: 85%; object-fit: cover;">
  </div>

  <div class="content">
    <div class="row g-3">
      <div class="col-md-6">
        <div class="card-custom">
          <div class="section-title mb-2">Deskripsi</div>
          <p style="text-align: justify;">
            Tangkuban Perahu adalah sebuah gunung berapi yang terletak di Lembang, Jawa Barat, Indonesia. Gunung ini terkenal karena bentuknya yang menyerupai perahu terbalik, yang berkaitan erat dengan legenda rakyat Sunda tentang Sangkuriang. Gunung ini masih aktif dan memiliki beberapa kawah yang bisa dikunjungi oleh wisatawan, seperti Kawah Ratu dan Kawah Domas. Selain panorama alam yang indah, kawasan ini juga menawarkan udara sejuk dan berbagai fasilitas wisata yang menarik. Tangkuban Perahu menjadi salah satu destinasi favorit bagi wisatawan lokal maupun mancanegara.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card-custom">
          <div class="section-title mb-2">Lokasi</div>
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63398.67324344194!2d107.54103185!3d-6.7593536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1904f2c888f%3A0xf6b2645aaefb2207!2sTangkuban%20Perahu!5e0!3m2!1sen!2sid!4v1615779370622!5m2!1sen!2sid" 
            width="100%" 
            height="250" 
            style="border:0; border-radius:10px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Toggle Script -->
  <script>
    const toggle = document.getElementById('toggleMenu');
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
