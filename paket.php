PHP
<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Paket - Laundry</title>
</head>
<body>
    <h2>Data Paket Laundry</h2>
    <a href="paket_tambah.php">+ Tambah Paket</a><br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Jenis</th>
            <th>Harga/Kg</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_paket");
        while($d = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_paket']; ?></td>
            <td><?= $d['jenis']; ?></td>
            <td>Rp <?= number_format($d['harga']); ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>