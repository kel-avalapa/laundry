<?php
include 'koneksi.php';

$id_pelanggan   = $_POSTST['id_pelanggan'];
$id_paket       = $_POSTST['id_paket'];
$id_user        = $_POSTST['id_user'];
$qty            = $_POSTST['qty'];
$status         = $_POSTST['status'];
$tgl            = date('Y-m-d');

$query_paket = mysqli_query($koneksi,"SELECT harga FROM tb_paket WHERE id_paket = '$id_paket'");
$p = mysqli_fetch_array($query_paket);
$total_harga = $p['harga'] * $qty;

mysqli_query($koneksi, "INSERT INTO tb_transaksi VALUES('', '$id_pelangggan', '$id_pelanggan', '$id_user', '$id_paket', '$tgl', '$qty', '$total_harga', '$status')");
header("location:transaksi.php");
?>