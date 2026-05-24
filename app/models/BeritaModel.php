<?php
include 'config/koneksi.php';

class BeritaModel{
    private $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function getAll(){
        $query = mysqli_query(
            $this->conn, 
            "select * from berita order by id desc"
        );
        return $query;
    }

    public function insert($judul,$deksripsi,$foto,$tanggal){
        $query = "insert into berita (judul, deksripsi, foto, tanggal)
        values ('$judul','$deksripsi','$foto','$tanggal')";
        return mysqli_query($this->conn,$query);
    }
    
}