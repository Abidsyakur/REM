<?php
include("../config/koneksi.php");

$id_program_sponsor = $_POST['id_program_sponsor'];
$id_program = $_POST['id_program'];

$data = mysqli_query($conn,"UPDATE program_sponsor SET id_program = '$id_program' WHERE id_program_sponsor = '$id_program_sponsor'");
if($data){
    echo '<script>alert("Berhasil diedit!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tbspons.php">';

}else{
    echo "failed";
}

?>