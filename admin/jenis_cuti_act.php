<?php
include '../koneksi.php'; // Koneksi ke database

// Ambil data dari form
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];

// Insert data jenis cuti baru tanpa mengisi kolom last_updated
$query = "INSERT INTO tbl_jenis_cuti (jenis_nama, jenis_jumlah) VALUES ('$jenis', '$jumlah')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    header("location:jenis_cuti.php?alert=tambah");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>
