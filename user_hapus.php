<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id'");
header("location:user.php");
?>