<?php
include("../config/koneksi.php");
session_start();
$id_peserta = $_SESSION['id'];
$id_program = $_GET['id'];
// melakukan query untuk insert data ke tabel program_donatur
$query = "INSERT INTO program_peserta (id_peserta, id_program) VALUES ('$id_peserta', '$id_program')";
// mengeksekusi query
if(mysqli_query($conn, $query)) {
    echo '<script>alert("Berhasil ditambahkan!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/ticket.php">';
} else {
    echo 'error'. mysqli_error($conn);;
}

?>