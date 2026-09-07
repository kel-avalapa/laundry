<?php
include 'koneksi.php;

$id = $_GET['id'];
mysql_query($koneksi, "DELETE FROM tb_transaksi WHERE id_transaksi = '$id");
header("location:transaksi.php");
?>