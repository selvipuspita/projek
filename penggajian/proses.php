<?php
include '../database.php';
$gaji = new Penggajian();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];

    if ($aksi == "create") {
        $gaji->create($nip, $nama, $jabatan, $gaji_pokok);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $gaji->update($id,$nip, $nama, $jabatan, $gaji_pokok);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $gaji->delete($id);
        header("location:index.php");
    }

}