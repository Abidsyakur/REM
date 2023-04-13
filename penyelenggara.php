<?php
include("config/koneksi.php");
session_start();
session_regenerate_id(true);
$id_penyelenggara = $_SESSION['id'];
$data = mysqli_query($conn,"SELECT * FROM penyelenggara WHERE id_penyelenggara = $id_penyelenggara");
$result = mysqli_fetch_array($data);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$result['nama_penyelenggara']?></title>
    <link rel="stylesheet" href="asset/css/style2.css">
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
.col h2{
    margin-left: 8rem;
    color: #EAC81F;
    font-size: 50px;
    font-weight: 400;
}
.col a{
    margin-left: 8rem;
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
	</style>
  </head>
  <body>
    


	<nav>
		<a href="#">RAMADHAN EVENT</a>
		<ul>
			<li><a href="#">Home</a></li>
			<li class="dropdown">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CRUD
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view/crud_penyelenggara.php">Event</a></li>
            <li><a class="dropdown-item" href="view/lokasi.php">Lokasi</a></li>
          </ul>
        </li>
      </div>
    </li>
			<li class="dropdown">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$result['nama_penyelenggara']?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view/akunpenyelenggara.php">Akun</a></li>
            <li><a class="dropdown-item" href="view/program.php">Event</a></li>
            <li><a class="dropdown-item" href="view/tblokasi.php">Lokasi</a></li>
          </ul>
        </li>
      </div>
    </li>
			<li class="logout"><a href="func/logout.php">Logout</a></li>
		</ul>
	</nav>

    <div class="contain">
        <div class="col">
            <h2 class="h2">Selamat Datang,<br> <?=$result['nama_penyelenggara']?>
 di Ramadhan Event<br> Management</h2><br>
<a href="view/crud_penyelenggara.php" style="background-color:#97A743; padding:15px 25px;color:#fff; text-decoration:none; border-radius:15px;">
DAFTAR
</a>
        </div>
        <div class="col">
            <img src="asset/img/angpao.png" alt="">

        </div>
    </div>



   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>