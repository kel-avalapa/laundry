<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Paket Laundry "RR"</title>
</head>
<body>
    <h2>Data Paket Laundry</h2>
    <a href="paket_tambah.php">+ Tambah Paket</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Jenis</th>
            <th>Harga/Kg</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = "SELECT * FROM tb_paket ORDER BY id_paket DESC";
        $data = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        
        while ($d = mysqli_fetch_array($data)) {
            // Menyesuaikan jika nama kolom di database menggunakan 'harga' atau 'harga_paket'
            $harga_val = isset($d['harga']) ? $d['harga'] : (isset($d['harga_paket']) ? $d['harga_paket'] : 0);
            
            // Menyesuaikan jika nama kolom jenis menggunakan 'jenis_paket' atau 'jenis'
            $jenis_val = isset($d['jenis_paket']) ? $d['jenis_paket'] : (isset($d['jenis']) ? $d['jenis'] : '-');
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= isset($d['nama_paket']) ? $d['nama_paket'] : '-'; ?></td>
            <td><?= ucfirst($jenis_val); ?></td>
            <td>Rp <?= number_format($harga_val, 0, ',', '.'); ?></td>
            <td>
                <a href="paket_edit.php?id=<?= $d['id_paket']; ?>">Edit</a> | 
                <a href="paket_hapus.php?id=<?= $d['id_paket']; ?>" onclick="return confirm('Yakin ingin menghapus paket ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>