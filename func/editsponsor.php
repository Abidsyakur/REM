<?php
include("../config/koneksi.php");
$id_sponsor = $_POST['id_sponsor'];
$nama_sponsor = $_POST['nama_sponsor'];
$alamat_sponsor = $_POST['alamat_sponsor'];
$email_sponsor = $_POST['email_sponsor'];
$notelp_sponsor = $_POST['notelp_sponsor'];

$data = mysqli_query($conn,"UPDATE sponsor SET nama_sponsor = '$nama_sponsor',alamat_sponsor = '$alamat_sponsor',email_sponsor = '$email_sponsor',
notelp_sponsor = '$notelp_sponsor' WHERE id_sponsor = '$id_sponsor'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/akunsponsor.php">';
}else{
    echo "failed". mysqli_error($conn);
}

?>