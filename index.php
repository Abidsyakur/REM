<?php
include("config/koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REM</title>
    <link rel="stylesheet" href="asset/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<style>
		body {
    background-color: #1E3923;
    margin: 0;
    padding: 0;
    font-family: 'Jost';
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
.card-title{
  color:#EAC81F;
}
.card-title h5{
  font-weight: 400;
}
	</style>
  </head>
  <body>
    


	<nav>
		<a href="#">RAMADHAN EVENT</a>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="login.php">Event</a></li>
			<li><a href="tentang.php">Tentang</a></li>
		</ul>
	</nav>

    <div class="contain">
        <div class="col ">
            <img src="asset/img/eid.png" alt="">
        </div>
        <div class="col ">
          <p >Ramadhan Event merupakan platform yang menyediakan
program program yang ada di bulan  yang berkah yaitu
bulan ramadhan. Berbagai program dapat diikuti oleh khalayak
umum,seperti kajian, majelis, podcast, webinar, dan masih banyak lagi</p>
<p style="color:#C5D14F;font-weight: 700;">Pantau dan ikuti event terbaru yang ada 
di Ramadhan Event</p>

        </div>
    </div>

    <h2 class="text-center mb-4" id="judul" >Event Event <br> di Bulan Ramadhan</h2>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 d-flex flex-row-reverse" style="margin-bottom:250px;">
<?php
  $program = mysqli_query($conn,"SELECT * FROM program");
  if(mysqli_num_rows($program) > 0){
    while($prog = mysqli_fetch_array($program)){
?>
  <div class="col ">
  <div class="card" style="width: 18rem;">
  <img src="asset/img/program/<?=$prog['foto']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><b><?=$prog['nama_program']?></b></h5>
    <p class="card-text"><?=substr($prog['deskripsi_program'],0,90) ?>...</p>
    <a href="login.php" class="btn" style="background-color: #1E3923;color:#C5D14F">Daftar</a><br><br><?='telah dibuat '.date("d/m/Y")?>
  </div>
</div>


  </div>
<?php }} ?>

</div>
 </div>

 <footer class="custom-footer">
  Made by Official Ramadhan Event 2023
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>