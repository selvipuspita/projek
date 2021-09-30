<!DOCTYPE html>
<html lang="en">

<head>
<link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer-navbar/">

<title>Aplikasi Penggajian Karyawan PT. MAHAMERU CENTRATAMA SPINNING MILLS</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        include '../database.php';
        $gaji = new Penggajian();
        foreach ($gaji->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nip = $data['nip'];
    $nama = $data['nama'];
    $jabatan = $data['jabatan'];
    $gaji_pokok = $data['gaji_pokok'];

}
?>
<div class = "panel panel-primary">
    <div class = "panel-heading">
    <h3 class = "panel-title">Tampilan Data Penggajian</h3>
</div>
        <table>
            <tr>
                <th>Nomor Induk Pegawai</th>
                <td><input type="number" name="nip" value="<?php echo $nip; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Pegawai</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><input type="text" name="jabatan" value="<?php echo $jabatan; ?>" readonly></td>
            </tr>
            <tr>
                <th>Gaji Pokok</th>
                <td><input type="text" name="status" value="<?php echo $gaji_pokok; ?>" readonly></td>
            </tr>
        </table>
</body>

</html>