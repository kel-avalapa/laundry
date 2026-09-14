<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Paket Laundry</title>
</head>
<body>
    <h2>Data Paket Laundry</h2>
    <br/>
    <a href="paket_tambah.php">+ Tambah Paket</a>
    <br/><br/>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Paket</th>
            <th>Jenis</th>
            <th>Harga/Kg</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $no = 1;
        // Mengambil seluruh data dari tabel tb_paket
        $data = mysqli_query($koneksi, "SELECT * FROM tb_paket");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_paket']; ?></td>
            <!-- Menampilkan jenis paket dari database (menggunakan penanganan jika kosong) -->
            <td><?php echo isset($d['jenis_paket']) ? $d['jenis_paket'] : '-'; ?></td>
            <td>Rp <?php echo number_format($d['harga_per_kg'], 0, ',', '.'); ?></td>
            <td>
                <a href="paket_edit.php?id=<?php echo $d['id_paket']; ?>">Edit</a> | 
                <a href="paket_hapus.php?id=<?php echo $d['id_paket']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>