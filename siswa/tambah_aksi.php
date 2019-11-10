<?php

// koneksi database
include '../koneksi.php';

//menangkap data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$id_kelas = $_POST['id_kelas'];

//menginput data ke database
mysqli_query($koneksi, "insert into siswa values('','$nama','$alamat','$email','$no_tlp','$id_kelas')");

//mengalihkan ke halaman siswa
header("location:index.php");

?>