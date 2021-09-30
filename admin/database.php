<?php

class Database {
    public $host = "localhost", $user = "root", $password = "", $db = "laundry";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
            $this->host, 
            $this->user, 
            $this->password, 
            $this->db
        );
        if ( $this->koneksi ) {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}

// data tabel dosen dan mahasiswa
include 'costumer.php';
include 'orderan.php';
include 'jenis.php';
// include 'mahasiswa.php';

// koneksi DB
$db = new Database();

?>