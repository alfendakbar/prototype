<?php

// Koneksi
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "inventorydb";

$mysqli = new mysqli($host, $user, $pass, $dbnm);
if ($mysqli->connect_errno) {

  echo "Gagal Konek !". $mysqli->connect_errno;

} else {

  // echo "Berhasil Konek !";

}

 ?>
