<?php
$host     = "localhost";
$user     = "root";
<<<<<<< HEAD
$password = "";
$database = "laundry\"rr\"";
=======
$password = ""; 
$database = "laundry"rr"";
>>>>>>> 2efb79e41183003471388576f431b9d3761221c7

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>