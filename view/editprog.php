<?php
   include("../config/koneksi.php");
    $id_program_penyelenggara = $_GET['id'];
    $datalokasi = mysqli_query($conn,"SELECT * FROM lokasi ORDER BY id_lokasi");
    $data = mysqli_query($conn,"SELECT * FROM program_penyelenggara JOIN program ON program_penyelenggara.id_program = program.id_program
JOIN lokasi ON program.id_lokasi = lokasi.id_lokasi
    JOIN penyelenggara ON program_penyelenggara.id_penyelenggara = penyelenggara.id_penyelenggara
WHERE program_penyelenggara.id_program_penyelenggara = '$id_program_penyelenggara';");
 $result = mysqli_fetch_array($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$result['nama_program']?></title>
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
			<li><a href="../penyelenggara.php">Home</a></li>
			<li class="dropdown">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CRUD
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="crud_penyelenggara.php">Event</a></li>
            <li><a class="dropdown-item" href="lokasi.php">Lokasi</a></li>
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
            <li><a class="dropdown-item" href="program.php">Event</a></li>
            <li><a class="dropdown-item" href="tblokasi.php">Lokasi</a></li>
          </ul>
        </li>
      </div>
    </li>
			<li class="logout"><a href="func/logout.php">Logout</a></li>
		</ul>
	</nav>

    <div class="container" style="margin-top:2rem;margin-bottom:4rem;">
        <div class="row">
            <h2 class="h2">EDIT EVENT</h2>
        </div>
  <form enctype="multipart/form-data" method="POST" action="../func/editprog.php">
  <div class="form-group">
    <label for="nama_program">Nama Event</label>
    <input type="text" value="<?=$result['nama_program']?> " id="nama_program" name="nama_program" placeholder="Masukkan nama event Anda">
    <input type="text" value="<?=htmlentities($result['id_program'])?>; " hidden   id="id_program" name="id_program" >
  </div>
  <div class="form-group">
    <label for="deskripsi_program">Deskripsi Event</label>
   <textarea name="deskripsi_program" id="deskripsi_program" value="<?=$result['deskripsi_program']?> " cols="30" rows="10" ></textarea>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col">
        <label for="tgl_mulai">Tanggal Mulai</label>
        <input type="date" value="<?=$result['tgl_mulai']?> " id="tgl_mulai" name="tgl_mulai">
      </div>
      <div class="col">
        <label for="waktu_mulai">Waktu Mulai</label>
        <input type="time" value="<?=$result['waktu_mulai']?> " id="waktu_mulai" name="waktu_mulai">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col">
        <label for="tgl_selesai">Tanggal Selesai</label>
        <input type="date" value="<?=$result['tgl_mulai']?> " id="tgl_selesai" name="tgl_selesai">
      </div>
      <div class="col">
        <label for="waktu_selesai">Waktu Selesai</label>
        <input type="time" value="<?=$result['tgl_mulai']?> " id="waktu_selesai" name="waktu_selesai">
      </div>
    </div>
  </div>
  <div class="form-group">
  <select name="id_lokasi" class="form-select" aria-label="Default select example">
  <option value="<?=$result['id_lokasi']?>"><?=$result['nama_lokasi']?></option>
  <?php foreach($datalokasi as $lokasi) : ?>
  <option value="<?= $lokasi['id_lokasi'] ?>"><?=$lokasi['nama_lokasi'] ?></option>
  <?php endforeach; ?>
</select>
  </div>
  <div class="form-group">
    <label for="foto"></label>
    <input type="file" name="foto" id="foto" value="<?=$result['foto']?>">
  </div>
  <button type="submit" name="submit" id="submit" class="submit">Kirim</button>
</form>
    </div>

    



   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>