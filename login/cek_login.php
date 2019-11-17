<?php
session_start();

include 'koneksi.php';

//menangkap data dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

//menyeleksi data di database
$data = mysqli_query($koneksi,"select * from siswa where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$r = mysqli_fetch_assoc($data);
	$_SESSION['id'] = $r['id'];
	$_SESSION['username'] = $r['username'];
    $_SESSION['status'] = "login";
    header("location:../home/siswa.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>