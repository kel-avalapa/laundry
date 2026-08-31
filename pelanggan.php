<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
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
        $data = mysqli_query($koneksi, "SELECT * FROM pelanggan ORDER BY id_pelanggan DESC");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['hp']; ?></td>
            <td><?= $d['alamat']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>