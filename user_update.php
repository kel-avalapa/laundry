<?php
include 'koneksi.php';

$id_user  = $_POST['id_user'];
$nama     = $_POST['nama'];
$username = $_POST['username'];
$role     = $_POST['role'];

mysqli_query($koneksi, "UPDATE tb_user SET nama='$nama', username='$username', role='$role' WHERE id_user='$id_user'");
header("location:user.php");
?>