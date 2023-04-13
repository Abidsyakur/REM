<?php
include("../config/koneksi.php");
$id_peserta = $_POST['id_peserta'];
$nama_peserta = $_POST['nama_peserta'];
$alamat_peserta = $_POST['alamat_peserta'];
$email_peserta = $_POST['email_peserta'];
$jk_peserta = $_POST['jk_peserta'];
$notelp_peserta = $_POST['notelp_peserta'];

$data = mysqli_query($conn,"UPDATE peserta SET nama_peserta = '$nama_peserta',alamat_peserta = '$alamat_peserta',email_peserta = '$email_peserta',
jk_peserta = '$jk_peserta',notelp_peserta = '$notelp_peserta' WHERE id_peserta = '$id_peserta'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/akunpeserta.php">';
}else{
    echo "failed";
}

?>