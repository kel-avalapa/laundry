<?php
include 'koneksi.php';

// Proses update data ketika tombol 'update' / 'simpan' diklik
if (isset($_POST['update'])) {
    $id_paket     = $_POST['id_paket'];
    $jenis_paket  = $_POST['jenis_paket'];
    $nama_paket   = $_POST['nama_paket'];
    $harga_per_kg = $_POST['harga_per_kg'];

    $query = "UPDATE tb_paket SET jenis_paket='$jenis_paket', nama_paket='$nama_paket', harga_per_kg='$harga_per_kg' WHERE id_paket='$id_paket'";
    $update = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if ($update) {
        header("location:paket.php");
        exit();
    }
}

// Mengambil data berdasarkan id yang dikirim dari paket.php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_paket WHERE id_paket='$id'");
while($d = mysqli_fetch_array($data)){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Paket Laundry</title>
</head>
<body>
    <h2>Edit Data Paket Laundry</h2>
    <br/>
    <a href="paket.php">KEMBALI</a>
    <br/><br/>

    <form method="post" action="">
        <table>
            <tr>
                <td>Jenis Paket</td>
                <td>
                    <!-- Input hidden untuk membawa ID paket yang sedang diedit -->
                    <input type="hidden" name="id_paket" value="<?php echo $d['id_paket']; ?>">
                    
                    <select name="jenis_paket" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="Kiloan" <?php if($d['jenis_paket'] == 'Kiloan'){ echo 'selected'; } ?>>Kiloan</option>
                        <option value="Selimut" <?php if($d['jenis_paket'] == 'Selimut'){ echo 'selected'; } ?>>Selimut</option>
                        <option value="Bed Cover" <?php if($d['jenis_paket'] == 'Bed Cover'){ echo 'selected'; } ?>>Bed Cover</option>
                        <option value="Kaos" <?php if($d['jenis_paket'] == 'Kaos'){ echo 'selected'; } ?>>Kaos</option>
                        <option value="Lain-lain" <?php if($d['jenis_paket'] == 'Lain-lain'){ echo 'selected'; } ?>>Lain-lain</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Paket</td>
                <td><input type="text" name="nama_paket" value="<?php echo $d['nama_paket']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga per Kg</td>
                <td><input type="number" name="harga_per_kg" value="<?php echo $d['harga_per_kg']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="SIMPAN PERUBAHAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php } ?>