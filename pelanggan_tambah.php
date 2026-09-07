<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO tb_pelanggan (nama, no_hp, alamat) VALUES ('$nama', '$no_hp', '$alamat')";
    $insert = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($insert) {
        header("location:pelanggan.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan Laundry "RR"</title>
</head>
<body>
    <h2>Tambah Pelanggan Baru</h2>
    <a href="pelanggan.php">&laquo; Kembali ke Daftar Pelanggan</a><br><br>

    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>