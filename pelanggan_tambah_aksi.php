PHP
<?php
include 'koneksi.php';

$nama          = $_POST['nama'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp           = $_POST['tlp'];

mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES('', '$nama', '$alamat', '$jenis_kelamin', '$tlp')");
header("location:pelanggan.php");
?>