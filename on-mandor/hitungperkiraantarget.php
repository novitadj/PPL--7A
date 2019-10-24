<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Hitung Perkiraan Target</title>
    <style>

.form-login{
    margin-top: 2%;
}
.outter-form-login {
    padding: 10px;
    background: #a0855b;
    position: relative;
    border-radius: 5px;
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
    background: #e9e5dd;
    color: black;
    font-family: arial black;
}
        <style>


    * {margin:0; padding:0;}

    body {
    	background-color: #E5E5E5;
    	
    	width: 100%;
    	height: 100%;
    	background-size: 100%;

     font-family:Arial, Helvetica, sans-serif;
     color:#000;
    }
 
    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

    nav ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: #e9e5dd;
     padding: 0 20px;
     list-style: none;
     position: relative;
     display: inline-table;
     width: 100%;
    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#666;
    }

    nav ul li:hover a{
     color:black;
    }

    nav ul li a{
     display: block;
     font-family: arial black;
     padding: 25px;
     color: black;
     text-decoration: none;
    }

    nav ul ul{
     background: #e9e5dd;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 5px soild black;
     border-bottom: 1px solid black;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #fff;
    }

    nav ul ul li a:hover{
     background-color: #666;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
    </style>
</head>
<nav>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="#">Pegawai</a>
            <ul>
                <li><a href="datapegawai.php">Data Pegawai</a></li>
                <li><a href="datacapaianpegawai.php">Data Capaian Pegawai</a></li>
            </ul>
        </li>
        <li><a href="#">Perediksi</a>
            <ul>
                <li><a href="hitungperkiraantarget.php">Hitung Perkiraan Target</a></li>
                <li><a href="dataperkiraan.php">Data Perkiraan</a></li>
            </ul>
        </li>
        <li><a href="#">Kualitas</a></li>
        
        <li><a href="./../logout.php" onClick="return confirm ('Apakah Ingin Keluar ?')">Keluar</a></li>
    </ul>
</nav>
<body style="background-color:#e9e5dd; ">
<h1 style="padding-top: 10px;margin-top: 4%; margin-bottom: 2.5%; text-align: center;font-family:roboto; font-size: 30px; color: black;background-color: #e9e5dd; padding-bottom: 10px;margin-right: 15%; margin-left: 15%;">Masukkan Hari Keberapa Yang Ingin Anda  Perkirakan Dalam Form ! <br>Hitung Perkiraan Target Yang Akan Dicapai !</h1>
<center>
 <div style="position: center; width: 50%;" class="form-login">
 <div class="outter-form-login">
 	
        
            <form  action="dataperkiraan.php" class="inner-login" method="post" enctype="multipart/form-data" >
            <h3 style="padding-top: 20px; color: black; font-family: Arial black; font-size:20px; padding-bottom: 20px;" class="text-center title-login">Hitung Perkiraan Capaian</h3>

                <div class="form-group">
                    <input type="number" class="form-control" name="n" placeholder="Hari" id="n">
                </div>
               
               <div style="padding-top: 30px; font-size: 20px; text-align: justify; color:black; " >
               	 <input style="font-family: Arial black; font-size:15px;" type="submit" name="hitung" class="btn btn-block btn-custom-green" value="Hitung" />

              
       </div>
            </form>
        </div>
    </div>
</center>
</body>

</html>

