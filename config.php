<?php

// Untuk koneksi database local
// $server = "localhost";
// $user = "root";
// $password = "";
// $nama_database = "pendaftaran_siswa";

// Untuk koneksi database heroku
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $cleardb_url["host"];
$user = $cleardb_url["user"];
$password = $cleardb_url["pass"];
$nama_database = substr($cleardb_url["path"],1);

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>