<?php
 include "../config/koneksi.php";
 //menyiapkan data
 $nama_lokasi = $_POST['nama_lokasi'];
 $alamat = $_POST['alamat'];
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

//query sql
$sql = mysqli_query($conn,"INSERT INTO lokasi (nama_lokasi,alamat) VALUES ('$nama_lokasi','$alamat') ");


if($sql){
    echo '<script>alert("Berhasil ditambahkan!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/lokasi.php">';
}else{
    echo 'Errr';
}

?>