<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_paket WHERE id_paket = '$id'");
$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Paket - Laundry</title>
</head>
<body>
    <h2>Edit Data Paket</h2>
    <a href="paket.php">KEMBALI</a><br><br>

    <form method="post" action="paket_update.php">
        <input type="hidden" name="id_paket" value="<?= $d['id_paket']; ?>">
        <table border="0">
            <tr>
                <td>Jenis Paket</td>
                <td>
                    <select name="jenis">
                        <option value="kiloan" <?= $d['jenis'] == 'kiloan' ? 'selected' : ''; ?>>Kiloan</option>
                        <option value="selimut" <?= $d['jenis'] == 'selimut' ? 'selected' : ''; ?>>Selimut</option>
                        <option value="bed_cover" <?= $d['jenis'] == 'bed_cover' ? 'selected' : ''; ?>>Bed Cover</option>
                        <option value="kaos" <?= $d['jenis'] == 'kaos' ? 'selected' : ''; ?>>Kaos</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Paket</td>
                <td><input type="text" name="nama_paket" value="<?= $d['nama_paket']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" value="<?= $d['harga']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN PERUBAHAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>