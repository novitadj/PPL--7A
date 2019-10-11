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
 <center >
    <h3 style="font-family: arial; font-size: 25px;padding-top: 10px; padding-bottom: 20px;">Data Perkiraan</h3>
    <table border="1" class="table" width="50%" style="text-align: center;font-family: arial;" bgcolor="#83B582">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jumlah Pegawai</th>
            <th>Target (Kg)</th>
                 
        </tr>
         <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select id, tanggal, pegawai, ((pegawai*1)/(50*1))* 3075 as hitung from prediksi");
        while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['pegawai']; ?></td>
            <td><?php echo ceil($d['hitung']); ?></td>
          
        </tr>
        <?php } ?>
    </table>
    </table>
   </form>
    </center>
</body>
</html>