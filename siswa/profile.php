<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$data = mysqli_query($koneksi,"select * from siswa where id=$id");
	$row = mysqli_fetch_array($data);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Profile</title>
</head>
<body>
	<h2>Profile Siswa</h2>
	<table>
		
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><?php echo $row['id']; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $row['nama']; ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo $row['username']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $row['alamat']; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $row['email']; ?></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><?php echo $row['no_tlp']; ?></td>
			</tr>
	</table>
</body>
</html>