<?php
  include 'koneksi.php';

  $status = $statusMsg = ''; 
  if(isset($_POST["upload"])){
    $id= $_POST["id"];
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $waktu = $_POST["waktu"];
    $isi = $_POST["isi"];
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form method="POST" action="landingpage2.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div class="penambah">
  <input type="file" name="image">

<div>
<textarea 
    id="text" 
    cols="40" 
    rows="4" 
    name="image_text" 
    placeholder="Say something about this image..."></textarea>
</div>
<div>
    <button type="submit" name="upload">POST</button>
    <!-- <a href="editform.php?id='.$id[id]'">EDIT BANG</a> -->
    <a href="editform.php?id='.$id["id"].'">Editbg</a>
</div>
</div>
</div>
</form>
</body>
</html>
?>