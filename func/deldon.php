<?php
include("../config/koneksi.php");
$id_program_donatur = $_GET['id'];
$data = mysqli_query($conn,"DELETE FROM program_donatur WHERE id_program_donatur = '$id_program_donatur'");
if($data){
    echo '<script>alert("Berhasil dihapus!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tbdonatur.php">';

}else{
    echo "failed";
}

?>