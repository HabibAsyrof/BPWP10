<?php
require_once 'config/koneksi.php';

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
}