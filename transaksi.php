<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Transaksi Laundry "RR"</title>
</head>
<body>
    <h2>Daftar Transaksi Laundry "RR"</h2>
    <a href="transaksi_tambah.php">+ Tambah Pemesanan Baru</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pelanggan</th>
            <th>Paket</th>
            <th>Berat (kg)</th>
            <th>Total Bayar</th>
            <th>Status Bayar</th>
            <th>Status Cuci</th>
        </tr>
        <?php
        $no = 1;
        $query = "SELECT tb_transaksi.*, tb_pelanggan.nama, tb_paket.nama_paket 
                  FROM tb_transaksi 
                  JOIN tb_pelanggan ON tb_transaksi.id_pelanggan = tb_pelanggan.id_pelanggan 
                  JOIN tb_paket ON tb_transaksi.id_paket = tb_paket.id_paket 
                  ORDER BY id_transaksi DESC";
        $data = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['tgl_transaksi']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['nama_paket']; ?></td>
            <td><?= $d['berat']; ?> kg</td>
            <td>Rp <?= number_format($d['total_harga']); ?></td>
            <td><b><?= $d['status_bayar']; ?></b></td>
            <td><?= $d['status_cuci']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>