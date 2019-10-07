<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA CAPAIAN PEGAWAI</title>
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <style>

.form-login{
    margin-top: 5%;
}
.outter-form-login {
    padding: 10px;
    background: #83B582;
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
    background: black;
    color: #fff;
}
    * {margin:0; padding:0;}

    body {
        background-color: #E5E5E5;
        position: fixed;
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
     background: #83B582;
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
     background: #83B582;
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
        <li><a href="dataperkiraan.php">Data Perkiraan</a></li>
        <li><a href="#">Laporan</a>
            <ul>
                <li><a href="#">Laporan Analisis Kualitas</a></li>
            </ul>
        </li>
        <li><a href="#">Pegawai</a>
            <ul>
                <li><a href="datapegawai.php">Data Pegawai</a></li>
                <li><a href="datacapaianpegawai.php">Data Capaian Pegawai</a></li>
            </ul>
        </li>
        <li><a href="./../logout.php" onClick="return confirm ('Apakah Ingin Keluar ?')">Keluar</a></li>
    </ul>
</nav>
<body > 
  <form method="post" action="datacapaianpegawai.php" style="padding-left: 50px;padding-top: 50px;" >
        <button type="submit" style="font-family: Arial black; font-size:15px;background: black;color: #fff;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;padding-right: 20px; color:#83B582;">Tabel Data Capaian Pegawai</button>
    </form>

 <div style="padding-left: 400px;padding-right: 500px; width: 110%;" class="form-login">
 <div class="outter-form-login">
        
            <form action="simpandatacapaian.php" class="inner-login" method="post" onsubmit="validasi()">
            <h3 style="padding-top: 20px; color: black; font-family: Arial black; font-size:20px; padding-bottom: 20px;" class="text-center title-login">Masukkan Data Capaian Pegawai</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama">
                </div>

                <div class="form-group">
                    <select name="Tugas" class="form-control" id="Tugas">
                        <option value="">Tugas</option>
                        <option value="Kuli">Kuli</option>
                        <option value="Tukang Asap">Tukang Asap</option>
                        <option value="Perenteng">Perenteng</option>
                        </select>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="Banyaknya" id="Banyaknya" placeholder="Banyaknya">
                </div>
        
        <input onsubmit="validasi()" type="submit" name="simpan" value="Simpan" style="font-family: Arial black; font-size:15px;background: black;color: #fff;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;padding-right: 20px; color:#83B582;">
       
    

    </form>
    
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>

