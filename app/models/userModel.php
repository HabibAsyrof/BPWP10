<?php
include 'config/koneksi.php';

class userModel {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $query = mysqli_query(
            $this->conn,
            'select * from user order by id desc'
        );
        return $query;
    }

    public function insert( $email, $nama, $jabatan, $password ) {
        $query = "insert into user (email, nama, jabatan, password)
        values ('$email','$nama','$jabatan','$password')";
        return mysqli_query( $this->conn, $query );
    }

    public function getById( $id ) {
        $query = mysqli_query(
            $this->conn,
            "select * from user where id = '$id'"
        );
        return mysqli_fetch_assoc( $query );
    }

    public function update( $id, $nama, $jabatan, $password ) {
        $query = "update user set 
        nama = '$nama', 
        jabatan = '$jabatan',
        password = '$password'
        where id = '$id'";

        return mysqli_query( $this->conn, $query );

    }

    public function delete( $id ) {
        $query = "DELETE FROM user WHERE id='$id'";
        return mysqli_query( $this->conn, $query );
    }

     public function getByEmail($email){
        $query = mysqli_query(
            $this->conn,
            "select * from user 
            where email='$email'"
        );
        return mysqli_fetch_assoc($query);
    }

    
}

?>