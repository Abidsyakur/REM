<?php
include("../config/koneksi.php");
session_start();
$id_peserta = $_SESSION['id'];
$data = mysqli_query($conn,"SELECT * FROM peserta WHERE id_peserta = $id_peserta");
$result = mysqli_fetch_array($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun <?=$result['nama_peserta']?></title>
    <link rel="stylesheet" href="../asset/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<style>
		body {
    background-color: #1E3923;
    margin: 0;
    padding: 0;
    font-family: 'Jost';
}
.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
.button-container a{
    color: #EBCD24;
    text-decoration: none;;
}
.row h2{
    text-align: center;
    color: #EAC81F;
    font-size: 40px;
    font-weight: 400;
}
.my-button {
  color: #EBCD24;
  background-color: #1E4B27;
  border-radius: 20px;
  color: #ffffff;
  padding: 8px 16px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}
form {
  flex-direction: row;
  margin-bottom: 10px;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #EAC81F;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  transition: box-shadow 0.3s ease;

}

.input-wrapper {
  display: flex;
  flex-direction: column;
  margin-right: 20px;
}

.input-wrapper label {
  margin-bottom: 5px;
}

.input-wrapper input {
  padding: 5px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
}
form:hover {
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

.tgl{
    display: flex;
}
h2 {
  margin-bottom: 20px;
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
    color: #fff; 
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: none;
  background-color: #fff;
  border-radius: 5px;
  color: #EAC81F; 
}

button[type="submit"] {
  display: block;
  margin: 0 auto;
  padding: 10px 20px;
  background-color: #1E3923;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #859436;
}


	</style>
  </head>
  <body>
  <nav>
		<a href="#">RAMADHAN EVENT</a>
		<ul>
			<li><a href="../peserta.php">Home</a></li>
			<li><a href="../event.php">Event</a></li>
      <li class="dropdown">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $result['nama_peserta']?> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="akunpeserta.php">Akun</a></li>
            <li><a class="dropdown-item" href="ticket.php">Tiket Event</a></li>
          </ul>
        </li>
      </div>
    </li>
			<li class="logout"><a href="func/logout.php">Logout</a></li>
		</ul>
	</nav>

    <div class="container" style="margin-top:2rem;margin-bottom:4rem;">
        <div class="row">
            <h2 class="h2">Halaman Akun</h2>
        </div>
        <form action="../func/editpeserta.php" method="POST">
  <div class="form-group">
    <label for="nama_peserta">Nama</label>
    <input type="text" id="nama_peserta" name="nama_peserta" value="<?=$result['nama_peserta']?>">
    <input type="text" id="id_peserta" name="id_peserta" hidden value="<?=$result['id_peserta']?>">
  </div>
  <div class="form-group">
    <label for="nama">Email</label>
    <input type="text" id="email_peserta" name="email_peserta" value="<?=$result['email_peserta']?>">
  </div>
  <div class="form-group">      
      <select name="jk_peserta" class="form-select" aria-label="Default select example">
          <option selected><?=$result['jk_peserta']?></option>
          <option value="laki-laki">Laki-Laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
      <label for="alamat_peserta">Alamat</label>
      <input type="text" id="alamat_peserta" name="alamat_peserta" value="<?=$result['alamat_peserta']?>">
    </div>
    <div class="form-group">
      <label for="notelp_peserta">No Telp</label>
      <input type="text" id="notelp_peserta" name="notelp_peserta" value="<?=$result['notelp_peserta']?>">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" value="<?=$result['password']?>">
    </div>
  <button type="submit" id="submit" name="submit">update</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>