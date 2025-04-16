<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Cerita - Keong Mas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }

        .container-detail {
            background-color: #713d27;
            color: white;
            padding: 60px 100px;
            min-height: 100vh;
        }

        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-bar i {
            font-size: 24px;
            cursor: pointer;
            color: white;
        }

        .header-bar h3 {
            margin: 0;
            font-weight: bold;
            flex-grow: 1;
            text-align: center;
        }

        .story-image {
            display: block;
            max-width: 300px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        .story-text {
            text-align: justify;
            font-size: 18px;
            line-height: 1.8;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .container-detail {
                padding: 20px;
            }

            .story-text {
                font-size: 16px;
            }
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

    <div class="container-detail">
        <div class="header-bar mb-4">
            <a href="#"><i class="bi bi-arrow-left"></i></a>
            <h3>Cerita Keong Mas</h3>
        </div>

        <img src="/images/keong_mas.jpg" alt="Cerita Keong Mas" class="story-image">

        <div class="story-text">
            Dahulu kala, terdapat dua putri cantik dari Kerajaan Daha, yaitu Dewi Galuh Ajeng dan adiknya, Dewi Candra Kirana. Keduanya memiliki kepribadian yang sangat berbeda. Dewi Candra Kirana sangat baik hati, sedangkan Galuh Ajeng memiliki sifat iri dan dengki.

            Suatu hari, Pangeran Inu Kertapati dari Kerajaan Kahuripan jatuh cinta kepada Candra Kirana. Hal ini membuat Galuh Ajeng merasa iri. Dengan bantuan seorang penyihir jahat, Galuh Ajeng mengutuk Candra Kirana menjadi seekor keong emas dan membuangnya ke laut.

            Keong emas itu terbawa arus hingga ke sebuah desa, lalu ditemukan oleh seorang nenek tua yang baik hati. Setiap kali sang nenek pergi, keong emas berubah menjadi manusia dan memasak serta membersihkan rumah. Nenek itu pun heran dan ingin tahu siapa yang melakukannya.

            Suatu hari, nenek pura-pura pergi dan mengintip. Ia terkejut melihat Candra Kirana keluar dari keong emas. Sang nenek memeluknya dan berjanji akan menjaganya. Kabar tentang Keong Mas akhirnya sampai ke telinga Pangeran Inu Kertapati yang tengah mencari kekasihnya.

            Setelah melalui berbagai rintangan, pangeran berhasil menemukan dan mematahkan kutukan tersebut. Mereka pun kembali ke kerajaan dan hidup bahagia, sementara Galuh Ajeng dihukum atas perbuatannya.
        </div>
    </div>

    <script>
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
