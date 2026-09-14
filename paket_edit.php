<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Paket</title>
</head>
<body>
    <h2>Edit Data Paket</h2>
    <br/>
    <a href="paket.php">KEMBALI</a>
    <br/>
    <br/>

    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_paket WHERE id_paket='$id'";
    $data = mysqli_query($koneksi, $query);
    
    while($d = mysqli_fetch_array($data)){
        // AMANAH: Mengambil nilai dari database dengan pengecekan untuk mencegah undefined key
        
        // Ambil nilai jenis_paket (menangani jika di DB namanya 'jenis' atau 'jenis_paket')
        $jenis_val = isset($d['jenis_paket']) ? $d['jenis_paket'] : (isset($d['jenis']) ? $d['jenis'] : '');
        
        // Ambil nilai harga (menangani jika di DB namanya 'harga' atau 'harga_paket')
        $harga_val = isset($d['harga']) ? $d['harga'] : (isset($d['harga_paket']) ? $d['harga_paket'] : '');
        
        // Ambil nama_paket
        $nama_val = isset($d['nama_paket']) ? $d['nama_paket'] : '';

    ?>
    <form method="post" action="paket_update.php">
        <table>
            <tr>
                <td>Jenis Paket</td>
                <td>
                    <input type="hidden" name="id_paket" value="<?php echo $d['id_paket']; ?>">
                    <select name="jenis_paket" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="kiloan" <?php if($jenis_val == "kiloan"){ echo "selected";} ?>>Kiloan</option>
                        <option value="selimut" <?php if($jenis_val == "selimut"){ echo "selected";} ?>>Selimut</option>
                        <option value="bed_cover" <?php if($jenis_val == "bed_cover"){ echo "selected";} ?>>Bed Cover</option>
                        <option value="kaos" <?php if($jenis_val == "kaos"){ echo "selected";} ?>>Kaos</option>
                        <option value="lain" <?php if($jenis_val == "lain"){ echo "selected";} ?>>Lain-lain</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Paket</td>
                <td><input type="text" name="nama_paket" value="<?php echo $nama_val; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <!-- FIX: Memperbaiki tag input agar value dan tanda kutip tertutup dengan benar -->
                    <input type="number" name="harga" value="<?php echo $harga_val; ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN PERUBAHAN"></td>
            </tr>
        </table>
    </form>
    <?php 
    }
    ?>
</body>
</html>