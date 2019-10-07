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

.form-login{
    margin-top: 5%;
}
.outter-form-login {
    padding: 10px;
    background: black;
    position: relative;
    border-radius: 5px;
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
    background: #21A957;
    color: #fff;
}
    * {margin:0; padding:0;}

    body {
    	background-image: url(back.jpg);
    	background-repeat: no-repeat;
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
     background: #53bd84;
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
     background: #53bd84;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 5px soild black;
     border-bottom: 5px solid black;
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
        <li><a href="#">Perediksi</a>
            <ul>
                <li><a href="hitungperkiraantarget.php">Hitung Perkiraan Target</a></li>
                <li><a href="#">Hitung Perkiraan Waktu</a></li>
                <li><a href="#">Data Perkiraan</a></li>
            </ul>
        </li>
        <li><a href="#">Laporan</a>
            <ul>
                <li><a href="#">Laporan Analisis Kualitas</a></li>
            </ul>
        </li>
        <li><a href="#">Kepegawaian</a>
            <ul>
                <li><a href="#">Data Pegawai</a></li>
                <li><a href="#">Data Capaian Pegawai</a></li>
            </ul>
        </li>
        <li><a href="./../logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>
<body >

</body>
</html>

