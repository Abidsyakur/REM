<?php
// Ambil data yang di-submit melalui form
$email = $_POST['email'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$password = md5($_POST['password']);
$acc_type = $_POST['acc_type'];

// Lakukan koneksi ke database (contoh menggunakan MySQLi)
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rem";
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek apakah jenis akun adalah user atau admin
if ($acc_type == 'peserta') {
  // Insert data ke tabel peserta jika jenis akun adalah peserta
  $query = "INSERT INTO peserta (nama_peserta, jk_peserta, alamat_peserta,email_peserta,notelp_peserta,password) VALUES ('$nama', '$jk', '$alamat','$email','$notelp','$password')";
} else if ($acc_type == 'penyelenggara') {
  // Insert data ke tabel penyelenggara jika jenis akun adalah penyelenggara
  $query = "INSERT INTO penyelenggara (nama_penyelenggara, alamat_penyelenggara, email_penyelenggara,notelp_penyelenggara,password) VALUES ('$nama', '$alamat', '$email','$notelp','$password')";
}else if ($acc_type == 'donatur'){
    //insert data ke tbel donatur jika jenis akun adaalah donatur
    $query = "INSERT INTO donatur (nama_donatur, alamat_donatur, email_donatur,notelp_donatur,password) VALUES ('$nama', '$alamat', '$email','$notelp','$password')";
}else if ($acc_type == 'sponsor'){
    $query = "INSERT INTO sponsor (nama_sponsor, alamat_sponsor, email_sponsor,notelp_sponsor,password) VALUES ('$nama', '$alamat', '$email','$notelp','$password')";
}

// Eksekusi query untuk memasukkan data ke tabel
$result = $conn->query($query);

// Cek apakah proses sign up berhasil atau tidak
if ($result) {
    echo "<script>alert('Sign up berhasil! Silahkan login.');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
} else {
  echo "Sign up gagal!";
}

// Tutup koneksi ke database
$conn->close();
?>
