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
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        // Mengambil data dari tabel tb_pelanggan
        $query = "SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC";
        $data = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['no_hp']; ?></td>
            <td><?= $d['alamat']; ?></td>
            <td>
                <!-- Tombol Edit dan Hapus yang membawa ID pelanggan -->
                <a href="pelanggan_edit.php?id=<?= $d['id_pelanggan']; ?>">Edit</a> | 
                <a href="pelanggan_hapus.php?id=<?= $d['id_pelanggan']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>