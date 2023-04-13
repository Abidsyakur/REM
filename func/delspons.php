<?php
include("../config/koneksi.php");
$id_program_sponsor = $_GET['id'];
$data = mysqli_query($conn,"DELETE FROM program_sponsor WHERE id_program_sponsor = '$id_program_sponsor'");
if($data){
    echo '<script>alert("Berhasil dihapus!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tbspons.php">';

}else{
    echo "failed";
}

?>