PHP
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id'");
$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan - Laundry</title>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>
    <a href="pelanggan.php">KEMBALI</a><br><br>

    <form method="post" action="pelanggan_update.php">
        <input type="hidden" name="id_pelanggan" value="<?= $d['id_pelanggan']; ?>">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $d['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required><?= $d['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="L" <?= $d['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="P" <?= $d['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td><input type="text" name="tlp" value="<?= $d['tlp']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN PERUBAHAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>