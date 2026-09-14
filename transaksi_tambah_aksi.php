<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $id_user = $_POST['id_user']; // Sesuaikan dengan session login jika ada

    $query = "INSERT INTO tb_transaksi (id_pelanggan, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) 
              VALUES ('$id_pelanggan', '$tgl', '$batas_waktu', '$tgl_bayar', '$status', '$dibayar', '$id_user')";
              
    $insert = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($insert) {
        header("location:transaksi.php");
        exit();
    }
}
?>