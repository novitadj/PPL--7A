<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body > 
    <center>
    <h3 style="font-family: arial; font-size: 25px;padding-top: 10px; padding-bottom: 30px;">Data Capaian Pegawai</h3>
    
    <table border="1" class="table" width="50%" style="text-align: center;font-family: arial;" bgcolor="#83B582">
        <tr>
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
    $Banyaknya = mysqli_query ($koneksi, "SELECT Banyaknya FROM capaian");
        $jumlah_gaji = 0;
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

    ?>
    <tr>
            <td><?=$no+1;?>.</td>

            <td><?=$data['Tanggal'];?></td>
            <td align="center"><?=$data['Nama'];?></td>
            <td align="center"><?=$data['Tugas'];?></td>
            <td align="center"><?=$data['Banyaknya'];?></td>
            <td align="center"><?=$jumlah_gaji?></td>
           
        </tr>
        <?php 
        $no++;
        $total += $jumlah_gaji;
     }
 }
     ?>
      <tr>
        <td colspan="5">Jumlah</td>
        <td ><?=$total;?></td>
        
    </tr>
   </table>
 
   </form>
    </center>
    <script>
        window.print();
    </script>
</body>
</html>