<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Combro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f1f1f1;
    }

    .header {
      background-color: #78483b;
      color: white;
      padding: 20px;
      text-align: center;
      position: relative;
    }

    .header .brand {
      position: absolute;
      left: 20px;
      top: 20px;
      font-family: cursive;
    }

    .nav-icon {
      position: absolute;
      right: 20px;
      top: 20px;
      font-size: 24px;
      cursor: pointer;
    }

    .content {
      background-color: #78483b;
      padding: 20px;
    }

    .img-fluid {
      border-radius: 10px;
      object-fit: cover;
      width: 100%;
      height: 100%;
    }

    .card-custom {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      font-weight: 400;
      text-align: justify;
      height: 100%;
      font-size: 18px; 
      color: #333;
    }

    .card-title {
      font-weight: bold;
      margin-bottom: 10px;
      text-align: center;
      font-size: 20px; 
      color: #78483b;
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

    .row-custom {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }

    .col-custom {
      flex: 1 1 48%;
      min-width: 320px;
    }

    .bahan, .cara-pembuatan {
      font-size: 18px;
      margin-bottom: 15px;
    }

    .bahan ul, .cara-pembuatan ol {
      padding-left: 20px;
    }
  </style>
</head>
<body>

  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <!-- Sidebar Menu -->
  <div class="side-menu" id="sideMenu">
    <h5>Ruang Budaya</h5>
    <a href="#">Home</a>
    <a href="#">Akun</a>
    <a href="#">Logout</a>
  </div>

  <div class="header">
    <div class="brand">Ruang Budaya</div>
    <h4 class="mt-4">Combro<br><small>Mari Mengenal Lebih Jauh</small></h4>
    <div class="nav-icon" id="toggleMenu">
      <i class="bi bi-list"></i>
    </div>
  </div>

  <div class="content">
    <div class="row-custom">
      <div class="col-custom">
        <div class="text-center">
          <img src="/images/comro.jpg" alt="Combro" class="img-fluid" />
        </div>
      </div>

      <div class="col-custom">
        <div class="card-custom">
          <div class="card-title">Deskripsi</div>
          Combro adalah makanan khas Sunda yang terbuat dari singkong parut yang diisi dengan oncom yang dibumbui pedas, kemudian dibentuk bulat lonjong dan digoreng hingga renyah. Nama "combro" berasal dari "oncom di jero" yang berarti "oncom di dalam". Camilan ini populer karena rasanya yang gurih dan pedas, cocok dinikmati sebagai teman minum teh atau kopi.
        </div>
      </div>
    </div>

    <div class="row g-3 mt-2">
      <div class="col-md-6">
        <div class="card-custom bahan">
          <div class="card-title">Bahan</div>
          <ul>
            <li>500 gram singkong parut</li>
            <li>100 gram kelapa parut kasar</li>
            <li>1 sdt garam</li>
            <li>Minyak goreng secukupnya</li>
            <li>Oncom secukupnya (untuk isian)</li>
          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card-custom cara-pembuatan">
          <div class="card-title">Cara Pembuatan</div>
          <ol>
            <li>Campur singkong parut, kelapa, dan garam, aduk rata.</li>
            <li>Tumis oncom dengan bumbu (bawang merah, bawang putih, cabai, kencur) hingga harum.</li>
            <li>Ambil adonan singkong, pipihkan, beri isian oncom lalu bulatkan.</li>
            <li>Goreng dalam minyak panas hingga kuning keemasan dan renyah.</li>
            <li>Angkat dan sajikan hangat.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Script Toggle Menu -->
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
