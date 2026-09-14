<?php
include 'koneksi.php'; // Pastikan file koneksi database sudah benar
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Laundry</title>
</head>
<body>

    <h2>Form Pemesanan Laundry "RR" Langsung</h2>

    <form action="transaksi_proses.php" method="POST">
        <label>Pilih Pelanggan:</label><br>
        <select name="id_pelanggan" required>
            <option value="">-- Pilih Pelanggan --</option>
            <?php
            // Mengambil data pelanggan dari database
            $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<option value='" . $row['id_pelanggan'] . "'>" . $row['nama'] . " (" . $row['no_hp'] . ")</option>";
            }
            ?>
        </select>
        <br><br>

        <!-- Di sini nanti bisa ditambahkan inputan lain seperti berat, jenis layanan, dll -->

        <button type="submit" name="simpan">Simpan Pesanan</button>
    </form>

</body>
</html>