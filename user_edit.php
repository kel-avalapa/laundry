<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user = '$id'");
$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User - Laundry</title>
</head>
<body>
    <h2>Edit Data User</h2>
    <a href="user.php">KEMBALI</a><br><br>

    <form method="post" action="user_update.php">
        <input type="hidden" name="id_user" value="<?= $d['id_user']; ?>">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $d['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?= $d['username']; ?>" required></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="role">
                        <option value="admin" <?= $d['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                        <option value="kasir" <?= $d['role'] == 'kasir' ? 'selected' : ''; ?>>Kasir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN PERUBAHAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>