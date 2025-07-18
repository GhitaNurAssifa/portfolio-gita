<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_ramalan");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
