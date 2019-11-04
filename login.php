<!DOCTYPE Html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   
  </head>
  <body background="20191101_195450_0000.png" style="background-repeat: no-repeat;position: center; background-size: 100%;">
    <center>
        <h2 style="padding-top: 50px;">Gudang Pengopenan Tembakau<br/>PTPN X Kertosari</h2>
        <br>
    </center>
    <center>
    <div style="position: center; width: 50%; padding-top: 5%;" class="form-login">
    <div style="padding-bottom: 30px;">
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>
  </div>
        <div class="outter-form-login">
        
            <form action="check-login.php" class="inner-login" method="post">
            <h3 style="padding-top: 10px; color: white; font-family: arial black;" class="text-center title-login">Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="MASUK" >
                
                
            </form>
        </div>
    </div>
  
</center>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<style>
    }
.form-login{
    margin-top: 5%;
}
.outter-form-login {
    padding: 10px;
    background:#a0855b;
    border-radius: 10px;
    padding-bottom: 30px;

}
.logo-login {
    position: absolute;
    font-size: 35px;
    background: #21A957;
    color: #FFFFFF;
    padding: 10px 18px;
    top: -40px;
    border-radius: 50%;
    left: 45%;
}
.inner-login .form-control {
    background: white;
}
h3.title-login {
    font-size: 20px;
    margin-bottom: 20px;
}

.forget {
    margin-top: 20px;
    color: #ADADAD;
}
.btn-custom-green {
    background: #eadea6;
    color: black;
    font-family: arial black;
}
</style>