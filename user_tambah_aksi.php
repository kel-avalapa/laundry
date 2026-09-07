<?php
include 'koneksi.php';

$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$role     = $_POST['role'];

$query = mysqli_query($koneksi, "INSERT INTO tb_user VALUES('', '$nama', '$username', '$password', '$role')");

if($query){
    header("location:user.php");
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>