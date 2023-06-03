<?php
require_once 'koneksi.php';

$kode_siswa = $_GET['kode_siswa'];

$sql = "DELETE FROM ekskul_siswa WHERE kode_siswa='$kode_siswa'";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "ERROR: Tidak dapat mengeksekusi $sql. " . mysqli_error($conn);
}
