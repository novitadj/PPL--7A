<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body style="background-color: #e9e5dd;"> 
    <center>
    <h3 style="font-family: arial black; font-size: 25px;padding-top: 10px; padding-bottom: 10px;color: black;margin-right: 20%; margin-left: 20%;background-color: #a0855b;">Data Capaian Pegawai</h3>
    <table border="1" class="table"  style="position: center; width: 50%;text-align: center;font-family: arial;" bgcolor="#e9e5dd">
        <tr bgcolor="#a0855b" >
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
            $jumlah_gaji = $data['Banyaknya'] * 50000;
        }
        elseif ($data['Tugas'] != 'Kuli' && $data['Tugas'] != 'Tukang Asap' ){
        $jumlah_gaji = $data['Banyaknya'] * 45000;
    }
    elseif ($data['Tugas'] != 'Kuli' && $data['Tugas'] != 'Perenteng' ){
        $jumlah_gaji = $data['Banyaknya'] * 45000;
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
      
        <td bgcolor="#a0855b" colspan="4">Total</td>
        <td ><?=$jumlah;?></td>
        <td></td>
        
    </tr>
         <tr>
      
        <td bgcolor="#a0855b" colspan="5">Jumlah Gaji</td>
        <td ><?=$total;?></td>
        
    </tr>
    <?php
         
 }
     ?>
   </table>
 
   </form>
    </center>
    <script>
        window.print();
    </script>
</body>
</html>