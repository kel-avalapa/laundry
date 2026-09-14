<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "DELETE FROM tb_transaksi WHERE id_transaksi = '$id'";
    $hapus = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($hapus) {
        header("location:transaksi.php");
        exit();
    }
}
?>