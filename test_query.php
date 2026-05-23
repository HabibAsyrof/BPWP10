<?php

include 'config/koneksi.php';

$query = mysqli_query(
    $conn,
    "select * from berita"
);

while($row = mysqli_fetch_assoc($query)){
    echo $row['judul'];
    echo "</br>";
    echo $row['deksripsi'];
    echo "<br>";
}

$jumlah = mysqli_num_rows($query);
echo "jumlah berita ada : " . $jumlah;
echo "</br>";

