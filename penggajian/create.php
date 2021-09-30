<!DOCTYPE html>
<html lang="en">

<head>
<link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer-navbar/">

    <title>Aplikasi Penggajian Karyawan PT. MAHAMERU CENTRATAMA SPINNING MILLS</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class = "row">
<div class = "panel panel-primary">
    <div class = "panel-heading">
    <h3 class = "panel-title">Tambah Data</h3>
</div>
    <div class = "panel-body">
        <form method = "post" action = "proses.php">
        <input type="hidden" name="aksi" value="create">
            <table>
        <tr>
            <td width = "160px">Nomer Induk Pegawai</td>
            <td>
            <input type = "number" name = "nip" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Nama Pegawai</td>
                    <td>
                        <input type = "text" name = "nama" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Jabatan</td>
                    <td>
                        <input type = "text" name = "jabatan" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Gaji Pokok</td>
                    <td>
                        <input type = "number" name = "gaji_pokok" class = "form-control" required>
        </td>
        </tr>
        <tr>
            <td>
                <input type = "submit" name = "save" class = "btn btn-primary" value="Simpan">
                <a class = "btn btn-danger" href = index.php>Kembali</a>
        </td>
        </tr>
        </table>
        </form>
        </div>
        </div>
        </div>
</body>
</html>