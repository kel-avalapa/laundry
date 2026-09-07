<?php
include 'koneksi.php';

// Cek apakah ada parameter ID di URL
if (!isset($_GET['id'])) {
    header("location:pelanggan.php");
    exit();
}

$id = $_GET['id'];

// Ambil data pelanggan berdasarkan id_pelanggan
$query = "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id'";
$result = mysqli_query($koneksi, $query);
$d = mysqli_fetch_array($result);

// Jika tombol simpan perubahan diklik
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $update_query = "UPDATE tb_pelanggan SET nama='$nama', no_hp='$no_hp', alamat='$alamat' WHERE id_pelanggan='$id'";
    mysqli_query($koneksi, $update_query) or die(mysqli_error($koneksi));

    header("location:pelanggan.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan Laundry "RR"</title>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>
    <a href="pelanggan.php">&laquo; Kembali</a><br><br>

    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= isset($d['nama']) ? $d['nama'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required><?= isset($d['alamat']) ? $d['alamat'] : ''; ?></textarea></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp" value="<?= isset($d['no_hp']) ? $d['no_hp'] : ''; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="update">Simpan Perubahan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>