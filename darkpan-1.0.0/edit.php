<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id = $_POST['id'];
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $waktu = $_POST['waktu'];
        $isi = $_POST['isi'];
    
    
    $sql="UPDATE blog SET gambar='$gambar', judul='$judul', penulis='$penulis' ,waktu='$waktu', isi='$isi' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header('Location:table.php');
    }else{
        header('Location:edit.php?status=gagal');
    }
}
?>