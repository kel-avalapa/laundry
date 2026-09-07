<?php
include 'koneksi.php';

$id_paket   = $_POST['id_paket'];
$jenis      = $_POST['jenis'];
$nama_paket = $_POST['nama_paket'];
$harga      = $_POST['harga'];

mysqli_query($koneksi, "UPDATE tb_paket SET jenis='$jenis', nama_paket='$nama_paket', harga='$harga' WHERE id_paket='$id_paket'");
header("location:paket.php");
?>