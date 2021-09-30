<?php
class Penggajian extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $gaji = mysqli_query($this->koneksi, "select * from penggajian");
        // var_dump($datadosen);
        return $gaji;
    }

    // Menambah Data
    public function create($nip, $nama, $jabatan, $gaji_pokok)
    {
        mysqli_query(
            $this->koneksi,
            "insert into penggajian values(null,'$nip','$nama', '$jabatan', '$gaji_pokok')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $gaji = mysqli_query(
            $this->koneksi,
            "select * from penggajian where id='$id'"
        );
        return $gaji;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $gaji = mysqli_query(
            $this->koneksi,
            "select * from penggajian where id='$id'"
        );
        return $gaji;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nip, $nama, $jabatan, $gaji_pokok)
    {
        $gaji = mysqli_query(
            $this->koneksi,
            "update penggajian set gaji_pokok = '$gaji_pokok', jabatan = '$jabatan', nama='$nama', nip='$nip' where id='$id'"
        );
        return $gaji;
        
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from penggajian where id='$id'");
    }
}