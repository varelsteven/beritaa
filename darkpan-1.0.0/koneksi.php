<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "berita";

  $connect = mysqli_connect($host,$user,$password,$database)
  or die("gagal menghubungkan")
?>