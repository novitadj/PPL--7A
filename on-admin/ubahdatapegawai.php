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
    <title>UBAH DATA PEGAWAI</title>
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
     <?php
//buat variabel dari setiap field name form produk
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$Nama= mysqli_real_escape_string($koneksi, $_POST['Nama']);    //varibel field nama
$Alamat= mysqli_real_escape_string($koneksi, $_POST['Alamat']);    //varibel field stok
$Tugas= mysqli_real_escape_string($koneksi, $_POST['Tugas']);  //varibel field deskripsi

if(isset($_POST['simpan'])){
    if(empty($Nama) && empty($Alamat) && empty($Tugas)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:red;'>* Data Tidak Boleh Kosong !</p>";
    }
    elseif(empty($Nama)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:red;'>* Masukkan Nama Pegawai !</p>";
    }
    elseif(empty($Alamat)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:red;'>* Masukan Alamat Pegawai !</p>";
    }
    elseif(empty($Tugas)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:red;'>* Masukkan Tugas Pegawai !</p>";
    }
    
    else{  //jika semua sudah terpenuhi maka simpan ke tb_produk

    $edit=mysqli_query($koneksi, "UPDATE pegawai SET Nama='$Nama', Alamat='$Alamat', Tugas='$Tugas' WHERE id='$id'");
    if($edit){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Pegawai Berhasil diedit !');document.location='datapegawai.php'</script>";
    }
}
}
    ?>
  <form method="post" action="datapegawai.php" style="padding-left: 50px;padding-top: 50px;">
        <button type="submit" style="font-family: Arial black; font-size:15px;background: black;color: #fff;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;padding-right: 20px; color:#83B582;">Tabel Data Pegawai</button>
    </form>

 <div style="padding-left: 400px;padding-right: 500px; width: 110%;" class="form-login">
 <div class="outter-form-login">
        
            <form  class="inner-login" method="post" enctype="multipart/form-data">
                 <tr><td colspan="3"><?php echo $error;?></td></tr>
            <h3 style="padding-top: 20px; color: black; font-family: Arial black; font-size:20px; padding-bottom: 20px;" class="text-center title-login">Ubah Data Pegawai</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from pegawai where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $d['Nama']; ?>">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $d['Alamat']; ?>">
                </div>
                <div class="form-group">
                    <select name="Tugas" class="form-control" id="Tugas">
                        <option value="">Tugas</option>
                        <option value="Kuli">Kuli</option>
                        <option value="Tukang Asap">Tukang Asap</option>
                        <option value="Perenteng">Perenteng</option>
                        </select>
                </div>
        
        <input type="submit" name="simpan" value="Simpan" style="font-family: Arial black; font-size:15px;background: black;color: #fff;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;padding-right: 20px; color:#83B582;">
    </form>

        </div>
    </div>
         <?php 
        }
        ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
