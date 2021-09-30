<?php
include '../database.php';
$dosen = new Dosen();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama_costumer = $_POST['nama_costumer'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    if ($aksi == "create") {
        $dosen->create($nama_costumer, $alamat, $nomor_telepon);
        header("location:../jenis/create.php");
    } elseif ($aksi == "update") {
        $dosen->update($id, $nama_costumer, $alamat, $nomor_telepon);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}