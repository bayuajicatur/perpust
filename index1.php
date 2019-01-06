<a href="index.php" style="color:white" style="margin-left: 135;">&Lt; Back</a>
<br>
<a href="index1.php" style="margin-left: 5;"> 
    <button onClick="window.print();">Print</button> 
</a>
<html>
<body BACKGROUND="back.jpg">
<?php
include 'connect.php';
?>
<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        
    }
    table{
        width: 80%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #36c2ff;
    }
</style>
<br><br><br><br><br>
<h1 align="center" style="color:white">DATA PELANGGAN PINJAM BUKU</h1>
<br />
<table border="1" bgcolor="white">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Tanggal Pinjam</th>
            <th>Lama Pinjam</th>
        </tr>
    </thead>
    <title>RSWAN PROJECT</title>
    <tbody>
    <?php
    $sql = "SELECT * FROM tabel_biodata ORDER BY id";
    $no  = 1;
    foreach ($dbh->query($sql) as $baris) ;
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $baris['nama'] ?></td>
            <td><?php echo $baris['jenis_kelamin'] ?></td>
            <td><?php echo $baris['alamat'] ?></td>
            <td><?php echo $baris['judul_buku'] ?></td>
            <td><?php echo $baris['Penerbit'] ?></td>
            <td><?php echo $baris['tanggl_pinjam'] ?></td>
            <td><?php echo $baris['lama_pinjam'] ?></td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
</br>
<br><br>
<center><p style="color:white">BAYU PROJECT || Aplikasi Peminjaman Buku Perpus</p></center>
<br><br><br><br><br><br><br><br><br>
</body>
</html>