
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="header">RAMADHAN<br>EVENT</div>
                    <!-------Image-------->
                    <img src="asset/img/masjid.png" width="400" height="100" alt="">
                    <div class="text">
                        
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <h2 class="mb-5 text-center"><b>CREATE ACCOUNT</b></h2>
                        <form action="func/sign.php" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email_peserta">Email</label>
                            </div>
                            <!-- nama -->
                            <div class="input-field">
                                <input type="text" class="input" id="nama" name="nama" required autocomplete="off">
                                <label for="text">Nama</label>
                            </div>
                            <!-- jk -->
                            <select class="form-select" id="jk" name="jk">
                            <option selected>Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                            </select>
                            <!-- notelp -->
                            <div class="input-field">
                                <input type="text" class="input" name="notelp" id="notelp" required>
                                <label for="notelp">No Telpon</label>
                            </div>
                            <!-- alamat -->
                            <div class="input-field">
                                <input type="text" class="input" name="alamat" id="alamat" required>
                                <label for="alamat">Alamat</label>
                            </div>
                            <!-- pw --> 
                            <div class="input-field">
                                <input type="password" class="input" id="password"  name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <!-- status -->
                            <select class="form-select" id="acc_type" name="acc_type">
                            <option selected>Pilih Status Anda</option>
                            <option value="peserta">Peserta</option>
                            <option value="penyelenggara">Penyelenggara</option>
                            <option value="donatur">Donatur</option>
                            <option value="sponsor">Sponsor</option>
                            </select>
                            <div class="input-field">
                                <input type="submit" name="submit" class="submit" value="Sign Up">
                                
                            </div>
                            <div class="signin">
                                <span>Already have an account? <a href="login.php">Log in here</a></span><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>