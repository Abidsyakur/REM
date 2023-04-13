<?php
include("../config/koneksi.php");
$id_donatur = $_POST['id_donatur'];
$nama_donatur = $_POST['nama_donatur'];
$alamat_donatur = $_POST['alamat_donatur'];
$email_donatur = $_POST['email_donatur'];
$notelp_donatur = $_POST['notelp_donatur'];

$data = mysqli_query($conn,"UPDATE donatur SET nama_donatur = '$nama_donatur',alamat_donatur = '$alamat_donatur',email_donatur = '$email_donatur',
,notelp_donatur = '$notelp_donatur' WHERE id_donatur = '$id_donatur'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/akundonatur.php">';
}else{
    echo "failed";
}

?>