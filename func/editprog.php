<?php
include_once("../config/koneksi.php");
    $id_program = $_POST['id_program'];
    $nama_program = $_POST['nama_program'];
    $deskripsi_program = $_POST['deskripsi_program'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_selesai = $_POST['tgl_selesai'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];
    $id_lokasi = $_POST['id_lokasi'];
    $file = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $tipe = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    $path = "../asset/img/program/".$file;

    if($file != ""){
        $get_byid = mysqli_query($conn,"SELECT * FROM program WHERE id_program = '$id_program'");
        $result = mysqli_fetch_array($get_byid);
        unlink('../asset/img/program/'.$result['foto']);
        if($tipe == "image/jpeg" || $tipe == "image/png"){
            if($ukuran <= 100000){
                if(move_uploaded_file($tmp_file,$path)){
                   
                    $data = mysqli_query($conn,"UPDATE program SET nama_program ='$nama_program',deskripsi_program = '$deskripsi_program', 
                    tgl_mulai = '$tgl_mulai',tgl_selesai = '$tgl_selesai',waktu_mulai = '$waktu_mulai',waktu_selesai = '$waktu_selesai',id_lokasi = '$id_lokasi',foto ='$file' WHERE id_program = '$id_program' ");
                    
                    if($data){
                       echo 'berhasil';
                       echo '<meta http-equiv="refresh" content="0.2;url=../view/program.php">';
                    
                    }else{
                        echo "failed";
                    }

        
                }else{
                    echo '<script>alert("Gagal diedit!!")</script>';
                    echo '<meta http-equiv="refresh" content="0.2;url=../view/editprog.php">';
                }
            }else{
                echo '<script>alert("Ukuran Terlalu besar !!")</script>';
                echo '<meta http-equiv="refresh" content="0.2;url=../view/editprog.php">';
            }
        }else{
            echo '<script>alert("Tipe harus png atau jpg!!")</script>';
            echo '<meta http-equiv="refresh" content="0.2;url=../view/editprog.php">';
        }
    }else{
        $data = mysqli_query($conn,"UPDATE program SET nama_program ='$nama_program',deskripsi_program = '$deskripsi_program', 
        tgl_mulai = '$tgl_mulai',tgl_selesai = '$tgl_selesai',waktu_mulai = '$waktu_mulai',waktu_selesai = '$waktu_selesai',id_lokasi = '$id_lokasi' WHERE id_program = '$id_program' ");
        if($data){
            echo '<script>alert("Berhasil diedit!!")</script>';
            echo '<meta http-equiv="refresh" content="0.2;url=../view/program.php">';
        
        }else{
            echo "failed";
        }
    }



?>