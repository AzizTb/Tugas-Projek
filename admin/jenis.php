<?php
class Jenis extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datajenis = mysqli_query($this->koneksi, "SELECT * from jenis");
        // var_dump($datadosen);
        return $datajenis;
    }

    // Menambah Data
    public function create($jenis_layanan)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into jenis (jenis_layanan) values (null,'$jenis_layanan')"
        );
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datajenis = mysqli_query(
            $this->koneksi,
            "SELECT * from jenis where id='$id'"
        );
        return $datajenis;
    }
    // mengupdate data berdasarkan id
    public function update($id, $jenis_layanan)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE jenis set jenis='$jenis_layanan' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from jenis where id='$id'");
    }
}
?>