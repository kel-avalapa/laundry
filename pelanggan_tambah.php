<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $hp     = $_POST['hp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "INSERT INTO pelanggan (nama, hp, alamat) VALUES ('$nama', '$hp', '$alamat')");
    
    if ($query) {
        echo "<script>alert('Data Pelanggan Berhasil Disimpan!'); window.location='pelanggan.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan - Laundry "RR"</title>
</head>
<body>
    <h2>Tambah Data Pelanggan Baru</h2>
    <form method="POST">
        <label>Nama Pelanggan:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>No. HP/WA:</label><br>
        <input type="text" name="hp" required><br><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>
        
        <button type="submit" name="simpan">Simpan Pelanggan</button>
    </form>
</body>
</html>