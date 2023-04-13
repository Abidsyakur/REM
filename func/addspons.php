<?php
include("../config/koneksi.php");
// memulai session
session_start();

// mengambil nilai id_donatur dari session
$id_sponsor = $_SESSION['id'];
$id_program = $_POST['id_program'];


// melakukan query untuk insert data ke tabel program_donatur
$query = "INSERT INTO program_sponsor (id_program, id_sponsor) VALUES ('$id_program', '$id_sponsor')";
// mengeksekusi query
if(mysqli_query($conn, $query)) {
    echo '<script>alert("Berhasil ditambahkan!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/tbspons.php">';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);
?>
