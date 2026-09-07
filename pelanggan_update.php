PHP
<?php
include 'koneksi.php';

$id_pelanggan  = $_POST['id_pelanggan'];
$nama          = $_POST['nama'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp           = $_POST['tlp'];

mysqli_query($koneksi, "UPDATE tb_pelanggan SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tlp='$tlp' WHERE id_pelanggan='$id_pelanggan'");
header("location:pelanggan.php");
?>