<?php 
// koneksi database
include 'koneksiii.php';

// menangkap data yang di kirim dari form
$Nama = $_POST['Nama'];
$Tugas = $_POST['Tugas'];
$Banyaknya = $_POST['Banyaknya'];

// menginput data ke database
$sql= mysqli_query($koneksiii,"insert into capaian values('','$Nama','$Tugas','$Banyaknya')");

// mengalihkan halaman kembali ke index.php
if ($sql) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='datacapaianpegawai.php';
            </script>
        ";
    }
    
    //penyimpanan
 
?>
