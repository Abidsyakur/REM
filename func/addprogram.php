<?php
include '../config/koneksi.php';

session_start();


if (!isset($_SESSION['id'])) {
    // jika belum, redirect ke halaman login
    header("Location: login.php");
    exit;
}
$nama_program = $_POST['nama_program'];
$deskripsi_program = $_POST['deskripsi_program'];
$tgl_mulai = $_POST['tgl_mulai'];
$waktu_mulai = $_POST['waktu_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];
$waktu_selesai = $_POST['waktu_selesai'];
$id_lokasi = $_POST['id_lokasi'];

$nama_file = $_FILES['foto']['name'];
$tmp_file = $_FILES['foto']['tmp_name'];
$ukuran_file = $_FILES['foto']['size'];
$extensi_file = pathinfo($nama_file, PATHINFO_EXTENSION);

// generate nama file baru untuk menghindari duplikasi
$nama_file_baru = $nama_file . '.' . $extensi_file;
$target_dir = '../asset/img/program/';

// jika file berhasil diupload, simpan data ke database
if (move_uploaded_file($tmp_file, $target_dir . $nama_file_baru)) {
  $query = "INSERT INTO program (nama_program, deskripsi_program, tgl_mulai, waktu_mulai, tgl_selesai, waktu_selesai, id_lokasi, foto) VALUES ('$nama_program', '$deskripsi_program', '$tgl_mulai', '$waktu_mulai', '$tgl_selesai', '$waktu_selesai', '$id_lokasi', '$nama_file_baru')";
    $result = mysqli_query($conn,$query);
  if ($result) {
    echo '<script>alert("Berhasil ditambahkan!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../view/valprogram.php">';
  } else {
    echo "Error ". mysqli_error($conn);;
  }
} else {
  echo "Error: foto gagal diupload";
}
