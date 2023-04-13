<?php
include("../config/koneksi.php");
$id_program = $_GET['id'];
$data = mysqli_query($conn,"DELETE FROM program WHERE id_program = '$id_program'");
$data = mysqli_query($conn,"DELETE FROM program_penyelenggara WHERE id_program = '$id_program'");
if($data){
    echo '<script>alert("Berhasil dihapus!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/program.php">';

}else{
    echo "failed". $query . "<br>" . mysqli_error($conn);
}

?>