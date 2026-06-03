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

    public function insert( $judul, $kategori, $deskripsi, $foto, $tanggal ) {
        $query = "insert into berita (judul, kategori, deskripsi, foto, tanggal)
        values ('$judul','$kategori','$deskripsi','$foto','$tanggal')";
        return mysqli_query( $this->conn, $query );
    }

    public function getById($id) {
        $query = mysqli_query(
            $this->conn,
            "select * from berita where id = '$id'"
        );
        return mysqli_fetch_assoc( $query );
    }

    public function update(
        $id, 
        $judul, 
        $kategori, 
        $deskripsi, 
        $foto, 
        $tanggal)
        {
        $query = "update berita set 
        judul ='$judul', 
        kategori = '$kategori',
        deskripsi = '$deskripsi', 
        tanggal = '$tanggal',
        foto = '$foto'
        where id = '$id'";
        
        return mysqli_query($this->conn, $query);
        
    }
    
    public function delete($id){
        $query = "delete from berita where id = '$id'";
        return mysqli_query($this->conn, $query);
    }

}