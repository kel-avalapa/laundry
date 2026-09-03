<?php
include 'koneksi.php';

if (isset($_POST['proses_transaksi'])) {
    $id_pelanggan  = $_POST['id_pelanggan'];
    $id_paket      = $_POST['id_paket'];
    $berat         = $_POST['berat'];
    $status_bayar  = $_POST['status_bayar'];
    $tgl_transaksi = date('Y-m-d');

    // Ambil harga paket per kg
    $query_paket = mysqli_query($koneksi, "SELECT harga_per_kg FROM paket WHERE id_paket='$id_paket'");
    $data_paket  = mysqli_fetch_array($query_paket);
    $harga_per_kg = $data_paket['harga_per_kg'];

    // Hitung total harga otomatis
    $total_harga = $berat * $harga_per_kg;

    // Simpan ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO transaksi (id_pelanggan, id_paket, berat, total_harga, tgl_transaksi, status_bayar, status_cuci) 
        VALUES ('$id_pelanggan', '$id_paket', '$berat', '$total_harga', '$tgl_transaksi', '$status_bayar', 'Baru')");

    if ($simpan) {
        echo "<script>alert('Transaksi Pemesanan Berhasil!'); window.location='transaksi.php';</script>";
    } else {
        echo "Gagal simpan transaksi: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Langsung (Kasir)</title>
</head>
<body>
    <h2>Form Pemesanan Laundry "RR" Langsung</h2>
    <form method="POST">
        <label>Pilih Pelanggan:</label><br>
        <select name="id_pelanggan" required>
            <option value="">-- Pilih Pelanggan --</option>
            <?php
            $pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            while ($p = mysqli_fetch_array($pelanggan)) {
                echo "<option value='".$p['id_pelanggan']."'>".$p['nama']." (".$p['hp'].")</option>";
            }
            ?>
        </select><br><br>

        <label>Pilih Paket Laundry "RR":</label><br>
        <select name="id_paket" required>
            <option value="">-- Pilih Paket --</option>
            <?php
            $paket = mysqli_query($koneksi, "SELECT * FROM paket");
            while ($k = mysqli_fetch_array($paket)) {
                echo "<option value='".$k['id_paket']."'>".$k['nama_paket']." - Rp ".number_format($k['harga_per_kg'])."/kg</option>";
            }
            ?>
        </select><br><br>

        <label>Berat (Kg):</label><br>
        <input type="number" step="0.1" name="berat" placeholder="Contoh: 2.5" required><br><br>

        <label>Status Pembayaran:</label><br>
        <select name="status_bayar" required>
            <option value="Belum Bayar">Belum Bayar</option>
            <option value="Lunas">Lunas</option>
        </select><br><br>

        <button type="submit" name="proses_transaksi">Simpan Pesanan</button>
    </form>
</body>
</html>