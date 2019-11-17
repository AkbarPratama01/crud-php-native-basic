<?php
session_start();

include '../native/koneksi.php';

//menangkap data dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

//menyeleksi data di database
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$r = mysqli_fetch_assoc($data);
	if ($r['level'] == "admin") {
		$_SESSION['id'] = $r['id'];
		$_SESSION['username'] = $r['username'];
		$_SESSION['level'] = "admin";
    	$_SESSION['status'] = "login";
    	header("location:home/index.php");
	}elseif ($r['level'] == "operator") {
		$_SESSION['id'] = $r['id'];
		$_SESSION['username'] = $r['username'];
		$_SESSION['level'] = "operator";
    	$_SESSION['status'] = "login";
    	header("location:operator/index.php");
	}else{
		header("location:index.php?pesan=gagal");	
	}
	// $_SESSION['id'] = $r['id'];
	// $_SESSION['username'] = $r['username'];
 	// $_SESSION['status'] = "login";
    
}else{
    header("location:index.php?pesan=gagal");
}
?>