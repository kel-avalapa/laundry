<?php 
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    mysqli_query($koneksi, "INSERT INTO tb_user VALUES('', '$nama', '$username', '$password', '$role')");
    header("location:user.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>
    <h2>Tambah Data User / Kasir</h2>
    <a href="user.php">Kembali</a><br><br>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <label>Role:</label><br>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
        </select><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>