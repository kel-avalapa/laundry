<?php
include 'koneksi.php';

// Cek apakah tombol simpan sudah ditekan
if (isset($_POST['simpan'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    
    // Contoh data tambahan (bisa disesuaikan dengan form kamu nanti)
    $tgl_transaksi = date('Y-m-d');
    $status = 'Baru';

    // Query untuk memasukkan data ke tabel transaksi (sesuaikan nama tabel & kolomnya)
    $query = mysqli_query($koneksi, "INSERT INTO tb_transaksi (id_pelanggan, tgl_transaksi, status) VALUES ('$id_pelanggan', '$tgl_transaksi', '$status')");

    if ($query) {
        echo "<script>alert('Pesanan berhasil disimpan!'); window.location='transaksi_tambah.php';</script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}
?>