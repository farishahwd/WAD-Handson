<?php
$conn = mysqli_connect("localhost:8111","root","", "kasir_db");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
