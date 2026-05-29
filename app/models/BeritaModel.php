<?php
include 'config/koneksi.php';

class BeritaModel {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $query = mysqli_query(
            $this->conn,
            'select * from berita order by id desc'
        );
        return $query;
    }

    public function insert( $judul, $deskripsi, $foto, $tanggal ) {
        $query = "insert into berita (judul, deskripsi, foto, tanggal)
        values ('$judul','$deskripsi','$foto','$tanggal')";
        return mysqli_query( $this->conn, $query );
    }

    public function getById($id) {
        $query = mysqli_query(
            $this->conn,
            "select * from berita where id = '$id'"
        );
        return mysqli_fetch_assoc( $query );
    }

    public function update($id, $judul, $deskripsi, $foto, $tanggal){
        $query = "update berita set 
        judul ='$judul', 
        deskripsi = '$deskripsi', 
        tanggal = '$tanggal',
        foto = '$foto'
        where id = '$id'";
    
    
        return mysqli_query($this->conn, $query);
        
    }

}