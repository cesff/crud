<html>
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
    <center>
    <nav class="center navbar-light bg-dark">
  <a class="navbar-brand"><font color="white">DATA BIODATA</font</a>
</nav>
<center><br>
            <table class="table table-striped">
            <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Motivasi Hidup</th>
      <th scope="col"><center>Aksi</center></th>
        </tr>
                

                <?php
                include 'database.php';
                $biodata = new Biodata();
                $no = 1;
                foreach ($biodata->index() as $data) {
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['motivasi_hidup']; ?></td>
                        <td><button type="button" class="btn btn-success"><a href="show.php?id=<?php echo $data['id']; ?>"><font color="white">Tampil</font></a></button>
                            <button type="button" class="btn btn-danger"><a href="edit.php?id=<?php echo $data['id']; ?>"><font color="white">Ubah</font></a></button>
                            <button type="button" class="btn btn-warning"><a href="proses.php?id=<?php echo $data['id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')"><font color="white">Hapus</font></a></button> 
    
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </table>
            <button type="button" class="btn btn-primary btn-lg btn-block"><a href="tambah.php"><font color="white">Tambah</font></a></button><br><br> 

</body>

</html>