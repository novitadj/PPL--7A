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
    <link href="style.css" rel="stylesheet">
    <title>DATA PERKIRAAN</title>

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
<body style="background-color: #e9e5dd;"> 
 <center >
    
    <h3 style="font-family: arial black; font-size: 25px;padding-top: 10px; padding-bottom: 10px; margin-bottom: 2%; margin-top: 3%; background-color:#a0855b ;color: #e9e5dd;margin-right: 30%; margin-left: 30%;">Data Perkiraan</h3>
    <table border="1" class="data" style="position: center; width: 60%;text-align: center;font-family: arial;" bgcolor="#e9e5dd">
    <tr bgcolor="#a0855b" style="color: #e9e5dd;">
        <th>No.</th>
        <th>Tanggal</th>
        <th>Jumlah Capaian (Kg)</th>
        
    </tr>
    <?php 
    include 'koneksi.php';
    $sql = mysqli_query ($koneksi, "SELECT tanggal, sum(Banyaknya) as jumlah from capaian group by tanggal");
    if (mysqli_num_rows($sql) > 0) {

        $xa = 0;
        $jumlah_xa = 0;
        $jumlah_ya = 0;
        $jumlah_xxa = 0;
        $jumlah_xya = 0;


        while ($data = mysqli_fetch_array($sql)){
            $jumlah_xa += $xa;
            $jumlah_ya += $data['jumlah'];
            $jumlah_xxa += ($xa * $xa);
            $jumlah_xya += ($xa * $data['jumlah']);
        
    
     ?>
        <tr>
            <td><?=$xa+1;?>.</td>

            <td><?=$data['tanggal'];?></td>
            <td align="center"><?=$data['jumlah'];?></td>
            
        </tr>
        <?php 
        $xa++;
     }
     ?>
     
     
    <?php 
        $rata2_xa = $jumlah_xa / $xa;
        $rata2_ya = $jumlah_ya / $xa;
        $b1a = ($jumlah_xya - (($jumlah_xa * $jumlah_ya) /  $xa)) / ($jumlah_xxa - ($jumlah_xa * $jumlah_xa) / $xa);
        $b0a = $rata2_ya - $b1a * $rata2_xa;
             ?>
        
     <?php 
     }
      ?>
    
</table>

<div>
    <?php 
    $n= mysqli_real_escape_string($koneksi, $_POST['n']);
        if (isset($_POST['hitung'])) {
    if(empty($n)){    //jika nama kosong maka muncul pesan
        $error="<p style='padding-top: 10px;padding-bottom: 10px; font-family: arial; font-size: 18px; color:red;background-color:#a0855b; margin-bottom: 2%; margin-top: 2%; margin-right: 25%; margin-left: 25%;'>* Data Hari Tidak Boleh Kosong !</p>";
    }
    else { //jika kategori kosong maka muncul pesan
       
            $hari = $_POST['n'];
            $blna = ($xa - 1) +  $hari;
    
            $prediksia = $b0a + ($b1a * $blna);
            
            ?>
            <div style="padding-top: 10px;padding-bottom: 10px; font-family: arial; font-size: 18px; color:black ;background-color:#a0855b; margin-bottom: 2%; margin-top: 2%; margin-right: 25%; margin-left: 25%;">
                Prediksi jumlah capaian pegawai untuk <?=$hari;?> hari berikutnya adalah <?=ceil($prediksia);?> Kg <br>
               
            </div>
            <?php 
        }
    }
     ?>
</div>
<div>
    </table>
   </form>
   <tr><td colspan="3"><?php echo $error;?></td></tr>
   <form method="post" action="hitungperkiraantarget.php" style="padding-top: 10px;">
        <button type="submit" name="prediksi" id="prediksi" style="font-family: Arial black; font-size:15px;background-color:  #a0855b;color: #fff;padding-top: 10px;padding-bottom: 10px;padding-left: 20px;padding-right: 20px; color:#e9e5dd;">Prediksi Capaian Pegawai</button>
    </form >
    </center>
</body>
</html>