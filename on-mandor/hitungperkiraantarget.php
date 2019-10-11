<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
?>
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
        <style>


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
        <li><a href="#">Perediksi</a>
            <ul>
                <li><a href="hitungperkiraantarget.php">Hitung Perkiraan Target</a></li>
                <li><a href="dataperkiraan.php">Data Perkiraan</a></li>
            </ul>
        </li>
        <li><a href="#">Laporan</a>
            <ul>
                <li><a href="#">Laporan Analisis Kualitas</a></li>
            </ul>
        </li>
        <li><a href="#">Kepegawaian</a>
            <ul>
                <li><a href="datapegawai.php">Data Pegawai</a></li>
                <li><a href="datacapaianpegawai.php">Data Capaian Pegawai</a></li>
            </ul>
        </li>
        <li><a href="./../logout.php" onClick="return confirm ('Apakah Ingin Keluar ?')">Keluar</a></li>
    </ul>
</nav>
<body >
	<?php
//buat variabel dari setiap field name form produk
$tanggal= mysqli_real_escape_string($koneksi, $_POST['tanggal']);    //varibel field nama
$pegawai= mysqli_real_escape_string($koneksi, $_POST['pegawai']);    //varibel field stok

if(isset($_POST['hitung'])){
    if(empty($tanggal) && empty($pegawai)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:red;'>* Data Tidak Boleh Kosong !</p>";
    }
    elseif(empty($tanggal)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:red;'>* Masukkan Tanggal Perkiraan !</p>";
    }
    elseif(empty($pegawai)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:red;'>* Masukan Jumlah Pegawai !</p>";
    }
    
    else{  //jika semua sudah terpenuhi maka simpan ke tb_produk

    $save=mysqli_query($koneksi, "INSERT INTO prediksi (id,tanggal,pegawai)
    values ('','$tanggal','$pegawai')");
    if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Perkiraan Berhasil disimpan !');document.location='dataperkiraan.php'</script>";
    }
}
}
    ?>
<h1 style="padding-top: 50px; text-align: center;font-family:Arial; font-size: 20px; color: #83B582; background-color:black; padding-bottom: 50px;">Masukkan Tanggal Perkiraan Serta Jumlah Pegawai Yang Masuk Dalam Form Yang Telah Disediakan ! <br>Hitung Perkiraan Target Yang Akan Dicapai !</h1>
 <div style="padding-left: 400px;padding-right: 500px; width: 110%;" class="form-login">
 <div class="outter-form-login">
 	
        
            <form  action="" class="inner-login" method="post" enctype="multipart/form-data" >
            	 <tr><td colspan="3"><?php echo $error;?></td></tr>
            <h3 style="padding-top: 20px; color: black; font-family: Arial black; font-size:20px; padding-bottom: 20px;" class="text-center title-login">Hitung Perkiraan Target</h3>
                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" id="tanggal">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="pegawai" placeholder="Jumlah Pegawai" id="pegawai">
                </div>
               
               <div style="padding-top: 30px; font-size: 20px; text-align: justify; color:black; " >
               	 <input style="font-family: Arial black; font-size:15px;" type="submit" name="hitung" class="btn btn-block btn-custom-green" value="Hitung" />

              
       </div>
            </form>
        </div>
    </div>

</body>

</html>

