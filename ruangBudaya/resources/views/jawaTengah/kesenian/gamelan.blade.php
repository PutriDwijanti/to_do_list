<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gamelan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #78483b;
      margin: 0;
      padding: 0;
      min-height: 100vh;
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
      padding: 30px 20px;
      flex: 1;
    }

    .row-custom {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      align-items: stretch;
    }

    .col-custom {
      flex: 1 1 45%;
      min-width: 300px;
      display: flex;
      flex-direction: column;
    }

    .img-fluid {
      border-radius: 10px;
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .card-custom {
      background-color: #fffdf8;
      border-radius: 15px;
      padding: 30px 25px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      font-size: 17px;
      color: #333;
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
    }

    .card-title {
      font-weight: bold;
      text-align: center;
      font-size: 20px;
      margin-bottom: 10px;
      color: #000;
    }

    .card-custom .icon {
      font-size: 30px;
      text-align: center;
      color: #78483b;
      margin-bottom: 10px;
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

  <div class="overlay" id="overlay"></div>

  <div class="side-menu" id="sideMenu">
    <h5>Ruang Budaya</h5>
    <a href="#">Home</a>
    <a href="#">Akun</a>
    <a href="#">Logout</a>
  </div>

  <div class="header">
    <div class="brand">Ruang Budaya</div>
    <h4 class="mt-4">Gamelan<br><small>Warisan Musik Tradisional Indonesia</small></h4>
    <div class="nav-icon" id="toggleMenu"><i class="bi bi-list"></i></div>
  </div>
  
  <div class="content">
    <div class="row-custom">
      <div class="col-custom text-center">
        <img src="../gambar/gamelan.jpg" alt="Gamelan" class="img-fluid" />
      </div>
      <div class="col-custom">
        <div class="card-custom">
            <div class="icon"><i class="bi bi-music-note-list"></i></div>
          <div class="card-title">Deskripsi</div>
          <hr />
          <p>
            <strong>Gamelan</strong> adalah ensambel musik tradisional Indonesia yang menggunakan berbagai alat musik, terutama instrumen perkusif seperti gong dan metallophone. 
            Musik gamelan memainkan peran penting dalam upacara adat, pertunjukan seni, dan kehidupan sehari-hari masyarakat Jawa, Bali, dan Sunda. 
            Suara gamelan yang khas mencerminkan <span style="color:#78483b; font-weight:bold;">keharmonisan budaya Nusantara</span>.
          </p>
        </div>
      </div>
    </div>
  </div>

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
