<?php
include("../config/koneksi.php");
$id_lokasi = $_POST['id_lokasi'];
$nama_lokasi = $_POST['nama_lokasi'];
$alamat = $_POST['alamat'];

$data = mysqli_query($conn,"UPDATE lokasi SET nama_lokasi = '$nama_lokasi',alamat = '$alamat' WHERE id_lokasi = '$id_lokasi'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tblokasi.php">';

}else{
    echo "failed";
}

?>