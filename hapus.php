<?php

include("config.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];

    $selectSql = "SELECT foto FROM calon_siswa WHERE id=$id";
    $selectQuery = mysqli_query($db, $selectSql);
    $data = mysqli_fetch_array($selectQuery);

    if(is_file($data['foto']) && strcmp($data['foto'], "uploaded_images/default.jpg"))
        unlink($data['foto']);

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>