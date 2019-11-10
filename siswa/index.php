<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <div class = "container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
        <h3 style="font-align: center">Data SISWA</h3>
        <a class="btn btn-primary" href="tambah.php">TAMBAH DATA</a>
        <br>
        
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no =1;
                    $data = mysqli_query($koneksi,"select * from siswa inner join kelas on siswa.id_kelas = kelas.id");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo$no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['no_tlp']; ?></td>
                            <td><?php echo $d['email']; ?></td>
                            <td><?php echo $d['nama_kelas']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                                <a href="hapus.php?id=<?php echo$d['id']; ?>">Hapus</a>
                            </td>
                            
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</body>
</html>