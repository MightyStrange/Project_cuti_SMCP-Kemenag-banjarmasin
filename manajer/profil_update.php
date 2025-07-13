<?php
session_start();
include '../koneksi.php';

$id = $_SESSION['id'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];
$username = $_POST['username'];

// Cek apakah password diisi
if(!empty($_POST['password'])){
    // Gunakan password_hash untuk keamanan yang lebih baik
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

// Cek apakah ada file yang diupload
$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if($filename != ""){
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    // Validasi ekstensi file
    if(!in_array($ext, $allowed)) {
        header("location:admin.php?alert=gagal");
        exit(); // Tambahkan exit untuk menghentikan eksekusi jika gagal
    }

    // Upload file
    $file_gambar = $rand.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$file_gambar);
}

// Bangun query update
$query = "UPDATE tbl_manajer SET manajer_alamat='$alamat', manajer_kontak='$kontak', manajer_username='$username'";

// Tambahkan password ke query jika diisi
if(!empty($_POST['password'])){
    $query .= ", manajer_password='$password'";
}

// Tambahkan foto ke query jika ada file yang diupload
if($filename != ""){
    $query .= ", manajer_foto='$file_gambar'";
}

$query .= " WHERE manajer_id='$id'";

// Eksekusi query
if(mysqli_query($koneksi, $query)){
    header("location:index.php?alert=profil");
} else {
    // Tampilkan pesan error jika gagal
    echo "Error: " . mysqli_error($koneksi);
}
?>
