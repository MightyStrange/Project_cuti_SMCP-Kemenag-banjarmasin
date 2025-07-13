<?php 
include '../koneksi.php';

$devisi = $_POST['devisi'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$kontak = $_POST['kontak'];
$username = $_POST['username'];
$password = md5($_POST['password']);

// Query untuk memasukkan data tanpa foto
if(mysqli_query($koneksi, "INSERT INTO tbl_karyawan VALUES(NULL, '$devisi', '$nip', '$nama', '$jabatan', '$alamat', '$kelamin', '$kontak', '$username', '$password', '')")) {
    header("location:karyawan.php?alert=tambah");
} else {
    die(mysqli_error($koneksi));
}
