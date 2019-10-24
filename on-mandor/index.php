<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="chartjs/Chart.js"></script>

    <style>


    * {margin:0; padding:0;}

    body {
    	
    	font-family: roboto;
    }

    table{
        margin: 0px auto;
    	
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
<body style="background-color:  #e9e5dd;">

    <center>
        <h2>Grafik Data Pengiriman Tembakau<br/>Berdasarkan Kualitas Daun</h2>
        <br>
    </center>
  <?php 
    include 'koneksi.php';
    ?>

    <div style="width: 800px;margin: 0px auto;">
        <canvas id="myChart"></canvas>
    </div>

    <br/>
    <br/>

    <script >
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["TNG", "KAK", "KOS"],
                datasets: [{
                    label: 'Data Kualitas',
                    data: [
                    <?php 
                    $jumlah_tng = mysqli_query($koneksi,"select * from kualitas where mutu='TNG'");
                    echo mysqli_num_rows($jumlah_tng);
                    ?>, 
                    <?php 
                    $jumlah_kak = mysqli_query($koneksi,"select * from kualitas where mutu='KAK'");
                    echo mysqli_num_rows($jumlah_kak);
                    ?>, 
                    <?php 
                    $jumlah_kos = mysqli_query($koneksi,"select * from kualitas where mutu='KOS'");
                    echo mysqli_num_rows($jumlah_kos);
                    ?> 
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: { 
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
    
</body>
</html>

