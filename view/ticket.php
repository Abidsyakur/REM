<?php
include("../config/koneksi.php");
session_start();
session_regenerate_id(true);
$id_peserta = $_SESSION['id'];
$data = mysqli_query($conn,"SELECT *
FROM program_peserta
JOIN program ON program_peserta.id_program = program.id_program
JOIN lokasi ON program.id_lokasi = lokasi.id_lokasi
JOIN peserta ON program_peserta.id_peserta = peserta.id_peserta
WHERE program_peserta.id_peserta = $id_peserta");
$tiket = 'REM-' . substr(uniqid(),3, 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Event</title>
</head>
<style>
    body{
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    background-color: #1E3923;
}

/* Main Ticket Style */
.ticketContainer{
    margin: 4px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.ticket{
    animation: bouncingCard 0.6s ease-out infinite alternate;
    background-color: #97A743;
    color: #1E3923;
    border-radius: 12px;
}
.ticketShadow{
    animation: bouncingShadow 0.6s ease-out infinite alternate;
    margin-top: 4px;
    width: 95%;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.4);
    filter: blur(12px);
}

/* Ticket Content */
.ticketTitle{
    font-size: 1.5rem;
    font-weight: 700;
    padding: 12px 16px 4px;
}
hr{
    width: 90%;
    border: 1px solid #1E3923;
}
.ticketDetail{
    font-size: 1.1rem;
    font-weight: 500;
    padding: 4px 16px;
}
.ticketSubDetail{
    display: flex;
    justify-content: space-between;
    font-size: 1rem;
    padding: 12px 16px;
}
.ticketSubDetail .code{
    margin-right: 24px;
}

/* Ticket Ripper */
.ticketRip{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.circleLeft{
    width: 12px;
    height: 24px;
    background-color: #1E3923;
    border-radius: 0 12px 12px 0;
}
.ripLine{
    width: 100%;
    border-top: 3px solid #1E3923;
    border-top-style: dashed ;
}
.circleRight{
    width: 12px;
    height: 24px;
    background-color: #1E3923;
    border-radius: 12px 0 0 12px;
}

/* Ticket Bouncing Animation */
@keyframes bouncingCard {
    from { transform: translateY(0);}
    to {transform: translateY(-18px);}
}
@keyframes bouncingShadow {
    from { transform: translateY(0px);}
    to {transform: translateY(4px);}
}


.bounce {
    position: absolute;
    text-align:center;
    margin:0 auto;
    top: 2px;
    left:20px;
    margin-top:100px;
    height:20px;
    width:70px;
    cursor: pointer;
    padding:10px;
    background:#85A93B;
    animation: bouncingCard 0.8s ease-out infinite alternate;
}

</style>
<body>

<!-- button back -->
<div class="bounce">
 <a href="../peserta.php" style="text-decoration:none;color:#1E3923">Back</a>
</div>

<!-- ticket -->
<?php foreach($data as $item): ?>
<div class="ticketContainer">
    <div class="ticket">
        <div class="ticketTitle">Ticket Event</div>
        <hr>
        <div class="ticketDetail">
            <div>Program:&nbsp;<?=$item['nama_program']?></div>
            <div>Tanggal:&nbsp;<?=$item['alamat']?></div>
            <div>Waktu:&emsp; <?=$item['waktu_mulai']?></div>
        </div>
        <div class="ticketRip">
      <div class="circleLeft"></div>
      <div class="ripLine"></div>
      <div class="circleRight"></div>
    </div>
    <div class="ticketSubDetail">
      <div class="code"><?=$tiket?></div>
      <div class="date"><?=date('d/m/Y', strtotime($item['tgl_mulai']))?></div>
    </div>
</div>
<div class="ticketShadow"></div>
</div>
<?php endforeach; ?>

</body>
</html>