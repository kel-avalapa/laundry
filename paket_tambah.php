<?php
include 'koneksi.php';

// Proses simpan data ketika tombol 'simpan' diklik
if (isset($_POST['simpan'])) {
    $jenis_paket  = $_POST['jenis_paket'];
    $nama_paket   = $_POST['nama_paket'];
    $harga_per_kg = $_POST['harga_per_kg'];

    $query = "INSERT INTO tb_paket (jenis_paket, nama_paket, harga_per_kg) VALUES ('$jenis_paket', '$nama_paket', '$harga_per_kg')";
    $insert = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($insert) {
        header("location:paket.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Paket Laundry</title>
</head>
<body>
    <h2>Tambah Data Paket Laundry</h2>
    <br/>
    <a href="paket.php">KEMBALI</a>
    <br/><br/>

    <form method="post" action="">
        <table>
            <tr>
                <td>Jenis Paket</td>
                <td>
                    <select name="jenis_paket" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="Kiloan">Kiloan</option>
                        <option value="Selimut">Selimut</option>
                        <option value="Bed Cover">Bed Cover</option>
                        <option value="Kaos">Kaos</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Paket</td>
                <td><input type="text" name="nama_paket" required></td>
            </tr>
            <tr>
                <td>Harga per Kg</td>
                <td><input type="number" name="harga_per_kg" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>