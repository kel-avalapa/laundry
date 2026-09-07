<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pelanggan Laundry "RR"</title>
</head>
<body>
    <h2>Daftar Pelanggan Laundry "RR"</h2>
    <a href="pelanggan_tambah.php">+ Tambah Pelanggan Baru</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>Alamat</th>
        </tr>
        <?php
        $no = 1;
        // Pastikan nama tabel (tb_pelanggan) dan kolom (id_pelanggan) sesuai dengan phpMyAdmin
        $query = "SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC";
        $data = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['no_hp']; ?></td>
            <td><?= $d['alamat']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>