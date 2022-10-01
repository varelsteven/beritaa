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
    <link rel="stylesheet" href="berita.css">

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

    <div class="konten">
    <div class="content">
        <h3>Olahraga</h3>
        <img src="maguire.jpg" alt="">
        <p>Harry Maguire dicadangkan adalah kelegaan <br> terbesar para pendukung Manchester United <br> Walaupun tampak seperti olok-olak, eks <br> pemain Man United Jaap Stam menyarankan <br> Maguire untuk mengambil hikmahnya </p> 
    </div>

    <div class="content2">
        <h3>Kuliner</h3>
        <img src="lemon.jpg" alt="">
        <p>Tak hanya kaya nutrisi, khususnya vitamin C, lemon <br> juga memiliki sejumlah manfaat untuk makanan. <br> Salah satunya untuk mengempukkan daging.</p> 
    </div>
    <div class="content3">
        <h3>Teknologi</h3>
        <img src="teknologi.jpg" alt="">
        <p>Teknologi adalah keseluruhan sarana untuk menyediakan <br>barang-barang yang diperlukan bagi kelangsungan dan<br> kenyamanan hidup Penggunaan teknologi oleh manusia <br> dimulai dengan pengubahan <br> sumber daya alam menjadi alat-alat sederhana.</p> 
    </div>
    <div class="content4">
        <h3>Esport</h3>
        <img src="tny.jpg" alt="">
        <p>Ajang pertandingan untuk milenial Esport dikota Depok <br> diadakan oleh SAGA ESPORT telah mengumumkan <br> pemenang secara resmi para pemenangnya <br> dan dalam pertandingan tersebut yang mendapatkan <br> juara 1 yaitu TNY Group dan mendapatkan hadiah sebesar <br>Rp 3.000.000</p> 
    </div>
    </div>

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
