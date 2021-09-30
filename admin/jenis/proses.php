<?php
include '../database.php';
$proses_jenis = new Jenis();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $jenis_layanan = $_POST['jenis_layanan'];

    if ($aksi == "create") {
        $proses_jenis->create($jenis_layanan);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $proses_jenis->update($id, $jenis_layanan);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $proses_jenis->delete($id);
        header("location:index.php");
    }

}