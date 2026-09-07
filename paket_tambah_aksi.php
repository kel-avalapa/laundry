<?php
include 'koneksi.php';

$jenis      = $_POST['jenis'];
$nama_paket = $_POST['nama_paket'];
$harga      = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO tb_paket VALUES('', '$jenis', '$nama_paket', '$harga')");
header("location:paket.php");
?>