<?php
include 'koneksi.php';

// Pastikan tombol atau proses berjalan
if (isset($_POST['jenis_paket']) || isset($_POST['nama_paket'])) {
    $jenis_paket = $_POST['jenis_paket'];
    $nama_paket  = $_POST['nama_paket'];
    $harga       = $_POST['harga'];

    // Masukkan ke database (sesuaikan nama kolom tabel tb_paket)
    $query = "INSERT INTO tb_paket (jenis_paket, nama_paket, harga) VALUES ('$jenis_paket', '$nama_paket', '$harga')";
    $insert = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($insert) {
        header("location:paket.php");
        exit();
    }
}
?>