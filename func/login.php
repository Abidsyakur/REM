<?php
    session_start();
    include '../config/koneksi.php';

    if(array_key_exists('role', $_POST)&& !empty($_POST['role'])){
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $akun = $_POST['role'];
    if($akun == "peserta"){
        $emailatt = 'email_peserta';
        $nama = 'nama_peserta';
        $alamat = 'alamat_peseta';
        $notelp = 'notelp_peserta';
        $tabel = 'peserta';
      }elseif($akun == "penyelenggara"){
        $emailatt = 'email_penyelenggara';
        $nama = 'nama_penyelenggara';
        $alamat = 'alamat_penyelenggara';
        $notelp = 'notelp_penyelenggara';
        $tabel = 'penyelenggara';
        
      }elseif($akun == "donatur"){
        $nama = 'nama_donatur';
        $emailatt = 'email_donatur';
        $alamat = 'alamat_donatur';
        $notelp = 'notelp_donatur';
        $tabel = 'donatur';
        
      }elseif($akun == "sponsor"){
        $emailatt = 'email_sponsor';
        $nama = 'nama_sponsor';
        $alamat = 'alamat_sponsor';
        $notelp = 'notelp_sponsor';
      $tabel = 'sponsor';
    }
    // Mencocokkan email dan password dari database
$query = "SELECT * FROM $tabel WHERE $emailatt = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);

if($result && mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);
// menyimpan session user
$_SESSION['id'] = $row['id'];
$_SESSION['email'] = $row[$email];
$_SESSION['nama'] = $row[$nama];
$_SESSION['alamat'] = $row[$alamat];
$_SESSION['notelp'] = $row[$notelp];
$_SESSION['akun'] = $row[$akun];


// melakukan redirect sesuai tipe akun
if($akun == "donatur"){
$_SESSION['id'] = $row['id_donatur'];
header("Location: ../donatur.php");
}elseif($akun == "peserta"){
  $_SESSION['id'] = $row['id_peserta'];
  header("Location: ../peserta.php");

}elseif($akun == "penyelenggara"){
 $_SESSION['id'] = $row['id_penyelenggara'];
 header("Location: ../penyelenggara.php");
 
}elseif($akun == "sponsor"){
 $_SESSION['id'] = $row['id_sponsor'];
 header("Location: ../sponsor.php");
}else{
 echo 'status akun salah';
}
exit();
} else {
$error_msg = "Username atau password salah";
}

echo 'status akun salah';
  }else{
    echo 'pilih status akun';
  }


    


?>