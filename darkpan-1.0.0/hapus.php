<?php
    include 'koneksi.php';

    if(isset($_GET['id'])){
        header('Location:table.php');
}

$id=$_GET['id'];

$sql= "DELETE FROM blog WHERE id='$id'";
$query= mysqli_query($connect,$sql);

if ($query){
    header('Location:table.php');
}else{
    header('Location:hapus.php?status=gagal');
}
?>