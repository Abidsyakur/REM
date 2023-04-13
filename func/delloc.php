<?php
include("../config/koneksi.php");
$id_lokasi = $_GET['id'];
$data = mysqli_query($conn,"DELETE FROM lokasi WHERE id_lokasi = '$id_lokasi'");
if($data){
    echo '<script>alert("Berhasil dihapus!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tblokasi.php">';

}else{
    echo "failed";
}

?>