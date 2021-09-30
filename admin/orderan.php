<?php
class Orderan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataorder = mysqli_query($this->koneksi,
        "SELECT orderan.tanggal_order, costumer.nama_costumer, costumer.alamat, costumer.nomor_telepon,
        jenis.jenis_layanan, orderan.berat from orderan
        join costumer
        on costumer.id = order.id_costumer
        join jenis
        on jenis.id = order.id_jenis;
        ");
        
        return $dataorder;
    }

    // Menambah Data
    public function create($tanggal_order, $id_costumer, $id_jenis, $berat)
    {
        mysqli_query(
            $this->koneksi,
            "INSERT into orderan values(null,'$tanggal_order','$id_costumer', '$jenis_layanan', '$berat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    // public function show($id)
    // {
    //     $datadosen = mysqli_query(
    //         $this->koneksi,
    //         "SELECT * from costumer where id='$id'"
    //     );
    //     return $datadosen;
    // }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataorder = mysqli_query(
            $this->koneksi,
            "SELECT * from orderan where id='$id'"
        );
        return $dataorder;
    }
    // mengupdate data berdasarkan id
    public function update($id, $tanggal_order, $nama_costumer, $alamat, $nomor_telepon, $jenis_layanan, $berat)
    {
        mysqli_query(
            $this->koneksi,
            "UPDATE orderan set tanggal_orderan='$tanggal_orderan', nama_costumer='$nama_costumer', alamat='$alamat', nomor_telepon='$nomor_telepon', jenis_layanan='$jenis_layanan', berat='$berat' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE from orderan where id='$id'");
    }
}
?>