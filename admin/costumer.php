<?php
class Dosen extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datadosen = mysqli_query($this->koneksi, "SELECT * from costumer");
        
        return $datadosen;
    }

    // Menambah Data
    public function create($nama_costumer, $alamat, $nomor_telepon)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into costumer values(null,'$nama_costumer','$alamat','$nomor_telepon')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "SELECT * from costumer where id='$id'"
        );
        return $datadosen;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "SELECT * from costumer where id='$id'"
        );
        return $datadosen;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama_costumer, $alamat, $nomor_telepon)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE costumer set nama_costumer='$nama_costumer', alamat='$alamat', nomor_telepon='$nomor_telepon' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from costumer where id='$id'");
    }
}
?>