<?php 
include '../koneksi.php';
$devisi = $_POST['devisi'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "INSERT INTO tbl_manajer VALUES(NULL,'$devisi','$nip','$nama','$kelamin','$alamat','$kontak','$username','$password','manajer_foto.png','')")or die(mysqli_error($koneksi));
	header("location:manajer.php?alert=tambah");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:manajer.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "INSERT INTO tbl_manajer VALUES(NULL,'$devisi','$nip','$nama','$kelamin','$alamat','$kontak','$username','$password','$file_gambar','')")or die(mysqli_error($koneksi));
	header("location:manajer.php?alert=tambah");
	}
}

