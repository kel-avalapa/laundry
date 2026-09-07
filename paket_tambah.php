<?php 
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama_paket = $_POST['nama_paket'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    mysqli_query($koneksi, "INSERT INTO tb_paket VALUES('', '$nama_paket', '$jenis', '$harga')");
    header("location:paket.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Paket</title>
</head>
<body>
    <h2>Tambah Paket Laundry</h2>
    <a href="paket.php">Kembali</a><br><br>
    <form method="POST" action="">
        <label>Nama Paket:</label><br>
        <input type="text" name="nama_paket" required><br><br>
        <label>Jenis Paket:</label><br>
        <select name="jenis">
            <option value="Kiloan">Kiloan</option>
            <option value="Satuan">Satuan</option>
            <option value="Boneka/Karpet">Boneka/Karpet</option>
        </select><br><br>
        <label>Harga (Rp):</label><br>
        <input type="number" name="harga" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>