<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <title>DATA CAPAIAN PEGAWAI</title>

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
    <form method="post" action="datacapaian.php" style="padding-left: 50px;padding-top: 5px;" target="_BLANK">
        <button type="submit" style="font-family: Arial black; font-size:15px;background: #a0855b;padding-top: 10px;padding-bottom: 10px;padding-left: 28px;padding-right: 28px; color:#e9e5dd;">Cetak Data Capaian Pegawai</button>
    </form>
    <center>
    <h3 style="font-family: arial black; font-size: 25px;padding-top: 10px; padding-bottom: 10px;color: #e9e5dd;background-color: #a0855b;margin-top: 1%; margin-bottom: 2%;margin-right: 30%; margin-left: 30%;">Data Capaian Pegawai</h3>
    <table border="1" class="table"  style="position: center; width: 75%;text-align: center;font-family: arial;" bgcolor="#e9e5dd">
        <tr bgcolor="#a0855b" style="color: #e9e5dd;">
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>Banyaknya (Kg)</th>
            <th>Gaji (Rp)</th>
           
        </tr>
<?php 
    include "koneksi.php";
    $sql = mysqli_query ($koneksi, "SELECT * FROM capaian") or die (mysqli_error($co));
    if (mysqli_num_rows($sql) > 0) {
    $no = 0;
    $total = 0;
    $jumlah_gaji =0;
    $jumlah = 0;
    $Banyaknya = mysqli_query ($koneksi, "SELECT Banyaknya FROM capaian");
       
        while ($data = mysqli_fetch_array($sql)){
        if ($data['Tugas'] != 'Perenteng' && $data['Tugas'] != 'Tukang Asap' ){
            $jumlah_gaji = 80000;
        }
        elseif ($data['Tugas'] != 'Kuli' && $data['Tugas'] != 'Tukang Asap' ){
        $jumlah_gaji = $data['Banyaknya'] * 1000;
    }
    elseif ($data['Tugas'] != 'Kuli' && $data['Tugas'] != 'Perenteng' ){
        $jumlah_gaji = 80000;
    }
    $total += $jumlah_gaji;
    $jumlah += $data['Banyaknya'];
    ?>
    <tr>
            <td ><?=$no+1;?>.</td>

            <td><?=$data['Tanggal'];?></td>
            <td align="center"><?=$data['Nama'];?></td>
            <td align="center"><?=$data['Tugas'];?></td>
            <td align="center"><?=$data['Banyaknya'];?></td>
            <td align="center"><?=$jumlah_gaji?></td>
           
           
        </tr>
        <?php 
        $no++;
        
    }
    ?>
        <tr >
      
        <td bgcolor="#a0855b" colspan="4" style="color: #e9e5dd; font-family: arial black;">Total</td>
        <td ><?=$jumlah;?></td>
        <td></td>
        
    </tr>
         <tr>
      
        <td bgcolor="#a0855b" colspan="5" style="color: #e9e5dd;font-family: arial black;">Jumlah Gaji</td>
        <td ><?=$total;?></td>
        
    </tr>
    <?php
         
 }
     ?>
   </table>
 
   </form>
    </center>
</body>
</html>