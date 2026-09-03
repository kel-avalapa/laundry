<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "laundry\"rr\"";
=======
$password = ""; 
<<<<<<< HEAD
$database = "laundry"rr"";

>>>>>>> 2f76d0d11030b8521d35c61094235b3eb63a0244

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>