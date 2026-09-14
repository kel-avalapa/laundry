<?php
include 'koneksi.php';

// Menangkap data yang dikirim dari form paket_edit.php
$id_paket     = $_POST['id_paket'];
$jenis_paket  = $_POST['jenis_paket'];
$nama_paket   = $_POST['nama_paket'];
$harga_per_kg = $_POST['harga_per_kg'];


// Query update data ke database sesuai kolom yang ada (nama_paket & harga_per_kg)
$query = "UPDATE tb_paket SET nama_paket='$nama_paket', harga_per_kg='$harga_per_kg' WHERE id_paket='$id_paket'";
$update = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

if ($update) {
    // Jika berhasil, kembali ke halaman data paket
    header("location:paket.php");
    exit();
}
?>