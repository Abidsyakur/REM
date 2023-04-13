<?php
include("../config/koneksi.php");

$id_program_donatur = $_POST['id_program_donatur'];
$id_program = $_POST['id_program'];

$data = mysqli_query($conn,"UPDATE program_donatur SET id_program = '$id_program' WHERE id_program_donatur = '$id_program_donatur'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tbdonatur.php">';

}else{
    echo "failed";
}

?>