<?php
// konfigurasi database
$server = 'localhost';
$user = 'root';
$password = '';
$nama_database = 'pabweb';

$conn = mysqli_connect($server, $user, $password, $nama_database);
   // echo "BERHASIL!!";
if( !$conn ){
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
?>