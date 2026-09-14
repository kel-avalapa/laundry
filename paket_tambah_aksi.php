<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_paket   = $_POST['nama_paket'];
    $harga_per_kg = $_POST['harga_per_kg'];

    $query = "INSERT INTO tb_paket (nama_paket, harga_per_kg) VALUES ('$nama_paket', '$harga_per_kg')";
    $insert = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($insert) {
        header("location:paket.php");
        exit();
    }
}
?>