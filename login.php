
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Log In</title>
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
                        <h2 class="mb-5 text-center"><b>LOGIN</b> </h2>
                        <form action="func/login.php" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email_peserta">Email</label>
                            </div>
                          
                            <!-- status -->
                            <select class="form-select" id="role" name="role">
                            <option selected>Pilih Status Anda</option>
                            <option value="peserta">Peserta</option>
                            <option value="penyelenggara">Penyelenggara</option>
                            <option value="donatur">Donatur</option>
                            <option value="sponsor">Sponsor</option>
                            </select>
                            <div class="input-field">
                                <input type="password" class="input" id="password"  name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" name="submit" class="submit" value="Sign Up">
                                
                            </div>
                            <div class="signin">
                                <span>Already have an account? <a href="sign.php">sign in here</a></span><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>