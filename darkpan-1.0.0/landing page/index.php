<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/cdbc444101.js" crossorigin="anonymous"></script>
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Poppins:wght@200;300;400;500&family=Quicksand:wght@300;400;500;600;700&family=Roboto+Serif:opsz@8..144&family=Roboto:wght@100;300;500;700&display=swap" rel="stylesheet">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">TNY GROUP</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                 <a href="index.php">
                    <i class='bx bx-home' ></i>
                    <span class="links_name">Home</span>
                 </a>
            </li>
            <li>
                <a href="berita.php">
                    <i class='bx bx-news' ></i>
                   <span class="links_name">Berita</span>
                </a>
           </li>
        </ul>
    </div>
    <div class="home_content">
        <span class="first">Berita</span>
        <span class="two">Terkini</span>
    </div>
    
    <div class="jdl">
        <h1>HOT NEWS</h1>
    </div>

    <div class="slider-container">

<div class="slider-content">

    <div class="slider-single">
        <img class="slider-single-image" src="lesti.jpeg" alt="1" />
        <h1 class="slider-single-title">Rizky Billar dilaporkan ke polisi oleh istrinya, Lesti Kejora, atas tuduhan kekerasan dalam rumah tangga (KDRT). Lesti Kejora mengaku kekerasan tersebut terjadi setelah adanya perselingkuhan </h1>
        <a class="slider-single-likes" href="javascript:void(0);">
        </a>
    </div>
    <div class="slider-single">
        <img class="slider-single-image" src="gangster.jpg" alt="1" />
        <h1 class="slider-single-title">Untuk informasi, beberapa hari belakangan ini warga Kota Depok digegerkan dengan beberapa video aksi tawuran antar gangster.Dari informasi yang dihimpun, tawuran tersebut terjadi di wilayah Bogor, namun berbatasan dengan Kota Depok.Warga sekitar, Arek, mengatakan bahwa gangster ini sempat bersitegang dengan warga di lokasi.</h1>
        <a class="slider-single-likes" href="javascript:void(0);">
        </a>
    </div>
    <div class="slider-single">
        <img class="slider-single-image" src="evos.jpg" alt="1" />
        <h1 class="slider-single-title">sungguh hasil yang tidak memuaskan untuk evos legends di mpl s10 karna sekarang sudah di ambang tidak lolos ke playoff 
            #EVOSFAMSSAD </h1>
        <a class="slider-single-likes" href="javascript:void(0);">
        </a>
    </div>

    <div class="slider-single">
        <img class="slider-single-image" src="pildun.jpg" alt="1" />
        <h1 class="slider-single-title"> Qatar akan menutup perbatasan darat, udara, dan laut pada 1 November-22 Desember 2022, kecuali bagi penonton Piala Dunia 2022 yang memiliki Hayya Card (Kartu Hayya).Pemegang Hayya Card akan diperbolehkan masuk negara ini mulai 1 November 2022 sampai 23 Desember 2022, dan mereka dapat tinggal di negara ini sampai 23 Januari 2023</h1>
        <a class="slider-single-likes" href="javascript:void(0);">
        </a>
    </div>
</div>
</div>
<!-- partial -->
<script  src="./script.js"></script>

    <div class="footer">
        <h4>Berita Terkini</h4>
        <h3 >Contact us</h3>

        <div class="ke1">
        <ul>
            <li>Kategori</li>
            <li>Layanan</li>
            <li>Informasi</li>
        </ul>
        </div>

        <div class="ke2">
        <ul>
            <li>Tekhnologi</li>
            <li>Travel</li>
            <li>Kuliner</li>
        </ul>
        </div>

        <div class="ke3">
        <ul>
            <li>Karir</li>
            <li>Kesehatan</li>
            <li>Forum</li>
        </ul>
        </div>

        <div class="ke4">
        <ul>
            <li>Foto</li>
            <li>Esport</li>
            <li>Otomotif</li>
        </ul>
        </div>

        <div class="ke5">
        <ul>
            <li>Olahraga</li>
            <li>Elektronik</li>
            <li>Jaringan</li>
        </ul>
        </div>

        <div class="list-icon">
            <div><i class="fa-brands fa-twitter"></i></div>
            <div><i class="fa-brands fa-instagram"></i></div>
            <div><i class="fa-brands fa-facebook"></i></div>
            <div><i class="fa-brands fa-youtube"></i></div>
        </div>

    </div>


   

    <script>

        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }

    </script>

</body>
</html>
