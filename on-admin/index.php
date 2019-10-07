<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

 

   
    <title>Beranda</title>
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
        <li><a href="#">Beranda</a></li>
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
        <li><a href="./../logout.php" onClick="return confirm ('Apakah Ingin Keluar ?')">Logout</a></li>
    </ul>
</nav>
<body >
    <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.464687907407!2d113.6491720280047!3d-8.16699428538841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6938d89331fe5%3A0x9095936444fe60a3!2sGudang%20Pengopenan%20PTPN%20X%20Kertosari!5e0!3m2!1sid!2sid!4v1569153687184!5m2!1sid!2sid" width="1350" height="450" frameborder="0" style="border:1px solid grey;"></iframe>
    </center>
    <h1 style="font-family: Arial black; font-size: 25px; color: #83B582; padding-left: 30px; background-color: black; padding-top: 10px; padding-bottom: 10px;">Gudang Pengopenan PTPN X Kertosari</h1>
    <h2 style="font-family: Arial; font-size: 20px; color: black; padding-left: 30px;">Kantor Perusahaan</h2>
    <h3 style="font-family: Arial; font-size: 15px; color: black; padding-left: 30px; padding-top: 10px;">Jl. Tengiri, Badean Wetan, Dukuh Mencek, Panti, Kabupaten Jember, Jawa Timur 68151</h3>
</body>
</html>

