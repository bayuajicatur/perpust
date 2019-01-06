<?php
include 'connect.php';

if (isset($_POST)) {
    $sql = "INSERT INTO tabel_biodata VALUES ('', '$_POST[nama]',
    											 '$_POST[jenis_kelamin]', 
    											 '$_POST[alamat]',
    											 '$_POST[judul_buku]',
    											 '$_POST[penerbit]',
    											 '$_POST[tanggal_pinjam]', 
    											 '$_POST[lama_pinjam]')";
    $dbh->exec($sql);
}

header("location:index.php");
?>
