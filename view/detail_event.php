<?php
include("../config/koneksi.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Event</title>
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
.card {
  background-color: #C6D24FB8;
  border-radius: 10px;
  overflow: hidden;
  width: 300px;
}

.card .card-img-top {
  height: 200px;
  object-fit: cover;
  width: 100%;
}
h2{
    margin-top: 2rem;
    margin-bottom: 2rem;
    font-size: 38px;
    color:#EAC81F;
}
.card-title{
  color:#EAC81F;
}
.card-title h5{
  font-weight: 400;
}
.foto{
    display: flex;
    align-items: center;
    justify-content: center; 
    margin-bottom: 50px;
}
img{
    width: 814px;
    height: 307px;
}
p{
    color:#C19D25;
}
footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px;
}
.btn-primary {

  background-color: #97A743;
  border-color: #97A743;
  color: #fff;
}
.btn-primary:hover {
  background-color: #869635;
  border-color: #869635;
  color: #fff;
}
.btn a{
    color: #fff;
    text-decoration: none;
}
.btn-container {
    margin-top: 31px;
    margin-bottom: 31px;
  text-align: center;
}

	</style>
  </head>
  <body>
    


	<nav>
		<a href="#">RAMADHAN EVENT</a>
		<ul>
			<li><a href="../peserta.php">Home</a></li>
			<li><a href="#">Event</a></li>
			<li><a href="#">Tentang</a></li>
			<li class="logout"><a href="../func/logout.php">Logout</a></li>
		</ul>
	</nav>

    <div class="container">
        <?php
 
    $id_program = $_GET['id'];
      
    $program = mysqli_query($conn,"SELECT *
    FROM program_penyelenggara
    JOIN program ON program_penyelenggara.id_program = program.id_program
    JOIN lokasi ON program.id_lokasi = lokasi.id_lokasi
    JOIN penyelenggara ON program_penyelenggara.id_penyelenggara = penyelenggara.id_penyelenggara
    WHERE program_penyelenggara.id_program = $id_program");
    
    
         if(mysqli_num_rows($program)== 0 ){
             echo "<script>window.location ='../peserta.php' </script>";
         }
         $prog = mysqli_fetch_assoc($program);
            ?>
        <h2 class="text-center"><b><?=$prog['nama_program']?></b></h2>
        <div class="foto">
            <img src="../asset/img/program/<?=$prog['foto']?>" alt="">
        </div>
        <p><?=$prog['deskripsi_program']?></p>

        <!-- Button trigger modal -->
<div class="btn-container">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      DAFTAR
    </button>
</div>

<!-- Modal -->
      
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$prog['nama_program']?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Nama Event : <?=$prog['nama_program']?></p>
        <p>Tanggal : <?=$prog['tgl_mulai']?> s/d <?=$prog['tgl_selesai']?> </p>
        <p>Waktu : <?=$prog['waktu_mulai']?> s/d <?=$prog['waktu_selesai']?> </p>
        <p>Lokasi :<?=$prog['alamat']?> (<?=$prog['nama_lokasi']?>)</p>
        <p>Penyelenggara : <?=$prog['nama_penyelenggara']?></p>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><a href="../func/addpeserta.php?id=<?=$prog['id_program']?>">Daftar</a></button>
      </div>
    </div>
  </div>
</div>

    </div>



 <footer class="custom-footer">
  Made by Official Ramadhan Event 2023
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>