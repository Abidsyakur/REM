<?php
include("../config/koneksi.php");
$id_penyelenggara = $_POST['id_penyelenggara'];
$nama_penyelenggara = $_POST['nama_penyelenggara'];
$alamat_penyelenggara = $_POST['alamat_penyelenggara'];
$email_penyelenggara = $_POST['email_penyelenggara'];
$notelp_penyelenggara = $_POST['notelp_penyelenggara'];

$data = mysqli_query($conn,"UPDATE penyelenggara SET nama_penyelenggara = '$nama_penyelenggara',alamat_penyelenggara = '$alamat_penyelenggara',email_penyelenggara = '$email_penyelenggara',
notelp_penyelenggara = '$notelp_penyelenggara' WHERE id_penyelenggara = '$id_penyelenggara'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/akunpenyelenggara.php">';
}else{
    echo "failed". mysqli_error($conn);;
}

?>