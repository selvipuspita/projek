<html>
  <head>
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer-navbar/">

    <title>Aplikasi Penggajian Karyawan PT. MAHAMERU CENTRATAMA SPINNING MILLS</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Aplikasi Penggajian</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="index.php">Penggajian</a></li>
            <li><a href="tunjangan.php">Tunjangan</a></li>
            <li><a href="absen.php">Absensi</a></li>
            <li><a href="profil.php">Profil Perusahaan</a></li>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class = "panel panel-primary">
          <div class = "panel-heading">
              <h3 class = "panel-title">Data Penggajian</h3>
</div>
</div>
    <center>
        <div class = "panel-body">
        <a href="create.php" class = "btn btn-primary" style = "margin-bottom : 10px"> Tambah Data</a>
        <br>
        <table border="1" class = "table table bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nomor Induk Pegawai</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
                <th colspan="3">Aksi</th>
            </tr>
</center>
            <?php
include '../database.php';
$gaji = new Penggajian();
$no = 1;
// var_dump($dosen->index());
foreach ($gaji->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>
                    <td><?php echo $data['gaji_pokok']; ?></td>
                    <td>
                        <a class = "btn btn-primary" href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a class = "btn btn-primary" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" class = "btn btn-primary" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>