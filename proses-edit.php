<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    if(empty($foto)) {
        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: list-siswa.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
    } else {
        $fotoBaru = bin2hex(random_bytes(5))."_".$foto;
        $path = "uploaded_images/".$fotoBaru;
        
        if(move_uploaded_file($tmp, $path)) {
            $selectSql = "SELECT foto FROM calon_siswa WHERE id=$id";
            $selectQuery = mysqli_query($db, $selectSql);
            $data = mysqli_fetch_array($selectQuery);

            if(is_file($data['foto']))
                unlink($data['foto']);

            $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah', foto='$path' WHERE id=$id";
            $query = mysqli_query($db, $sql);

            if( $query ) {
                header('Location: list-siswa.php');
            } else {
                die("Gagal menyimpan perubahan...");
            }
        } else {
            die("Gagal mengupload foto");
        }
    }

} else {
    die("Akses dilarang...");
}

?>