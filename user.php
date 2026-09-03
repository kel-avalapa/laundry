<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data User - Laundry</title>
</head>
<body>
    <h2>Data User / Kasir</h2>
    <a href="user_tambah.php">+ Tambah User</a><br><br>
    
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_user");
        while($d = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['username']; ?></td>
            <td><?= $d['role']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>