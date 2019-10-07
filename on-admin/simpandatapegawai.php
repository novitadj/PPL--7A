<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tugas = $_POST['Tugas'];

// menginput data ke database
$sql= mysqli_query($koneksi,"insert into pegawai values('','$Nama','$Alamat','$Tugas')");

// mengalihkan halaman kembali ke index.php
if ($sql) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='datapegawai.php';
            </script>
        ";
    }
    
    //penyimpanan
 
?>
