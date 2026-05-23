<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "BPW";

$conn = mysqli_connect($host,$user,$pass,$db);

if($conn){
    echo "berhasil terkoneksi ke database";
    echo "</br>";
}else{
    echo "gagal terkoneksi ke database";
    echo "</br>";
}