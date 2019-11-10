<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data siswa</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <h3>Tambah Data</h3>
        <br>
        <form action="tambah_aksi.php" method="post">
        <div class="form-group">
            <label for="name1">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="name1" placeholder="Isi Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="tlp1">No Telepon</label>
            <input type="text" name="no_tlp" class="form-control" id="tlp1" placeholder="Isi No Telepon" minlength="12" maxlength="14">
        </div>
        <div class="form-group">
            <label for="email1">Email</label>
            <input type="email" name="email" class="form-control" id="email1" placeholder="Masukan Email">
        </div>
        <div class="form-group">
            <label for="alamat1">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="id_kelas">
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi,'select * from kelas');
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <option value="<?php echo $d['id_kelas'];?>"><?php echo $d['nama_kelas']; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <button class="sbtn btn-primary" type="submit" value="SIMPAN">Simpan</button>
        </div>
        </form>
    </div>
</body>
</html>