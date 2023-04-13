<?php
include("../config/koneksi.php");
session_start();

$id_penyelenggara = $_SESSION['id'];
$id_program = $_POST['id_program'];

// melakukan query untuk insert data ke tabel program_donatur
$query = "INSERT INTO program_penyelenggara (id_penyelenggara, id_program) VALUES ('$id_penyelenggara', '$id_program')";
// mengeksekusi query
if(mysqli_query($conn, $query)) {
    echo '<script>alert("Berhasil ditambahkan!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/program.php">';
} else {
    echo 'error';
}
?>