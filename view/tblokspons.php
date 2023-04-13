<?php
include("../config/koneksi.php");
session_start();
$id_sponsor = $_SESSION['id'];
$data = mysqli_query($conn,"SELECT * FROM lokasi ");
$sp = mysqli_query($conn,"SELECT * FROM sponsor WHERE id_sponsor = $id_sponsor");
$hasil = mysqli_fetch_array($sp);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Lokasi</title>
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
.btn-link {
  display: inline-block;
  padding: 8px 8px;
  border: 2px solid #1E3923;
  background-color: #1E3923;
  color: #EACB22;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn-link:hover {
  background-color: #EACB22;
  color: #1E3923;
}


	</style>
  </head>
  <body>
  <nav>
  <a href="#">RAMADHAN EVENT</a>
		<ul>
			<li><a href="../sponsor.php">Home</a></li>
      <li class="dropdown">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           CRUD
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="spons.php">sponsor</a></li>
            <li><a class="dropdown-item" href="tblokspons.php">Lokasi</a></li>
          </ul>
        </li>
      </div>
    </li>
      <li class="dropdown">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $hasil['nama_sponsor']?> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="akunsponsor.php">Akun</a></li>
            <li><a class="dropdown-item" href="tbspons.php">sponsorKu</a></li>
          </ul>
        </li>
      </div>
    </li>
			<li class="logout"><a href="func/logout.php">Logout</a></li>
		</ul>
	</nav>

    <div class="container" style="margin-top:2rem;margin-bottom:4rem;">
        <div class="row">
            <h2 class="h2">LIST LOKASI EVENT</h2>
        </div>
        <table class="table"style="background-color: #EACB22; color: #1E3923; border-radius:20px">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lokasi</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($data as $item):?>
    <tr>
        <th scope="row"><?=$no++?></th>
        <td><?= $item['nama_lokasi']?></td>
        <td><?= $item['alamat']?></td>
        <td>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>