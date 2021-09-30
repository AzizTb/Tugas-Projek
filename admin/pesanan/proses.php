<?php
include '../database.php';
$proses_order = new Orderan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = $_POST['id'];
    $tanggal_order = $_POST['tanggal_order'];
    $id_costumer = $_POST['id_costumer'];
    $id_jenis = $_POST['id_jenis'];
    $berat = $_POST['berat'];

    if ($aksi == "create") {
        $proses_order->create($tanggal_order, $id_costumer, $id_jenis, $berat);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $proses_order->update($id, $tanggal_order, $id_costumer, $id_jenis, $berat);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $proses_order->delete($id);
        header("location:index.php");
    }

}