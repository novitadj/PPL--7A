<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tugas = $_POST['Tugas'];
 
mysqli_query($koneksi, "UPDATE pegawai SET Nama='$Nama', Alamat='$Alamat', Tugas='$Tugas' WHERE id='$id'");
 
header("location:datapegawai.php?pesan=update");
?>