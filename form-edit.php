<?php

include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body class="bg-light text-dark d-flex flex-column">

    <div class="container-fluid content flex-grow-1 d-flex flex-column justify-content-center">
        <header class="text-center mt-4">
            <h3>Formulir Edit Siswa</h3>
        </header>

        <section class="mb-4 d-flex flex-column align-items-center justify-content-center">
            <article class="col-md-6">
                <form action="proses-edit.php" method="POST">
                    <div class="form-group my-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control rounded" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" required />
                    </div>

                    <div class="form-group my-2">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat siswa" style="width: 100%; height: 150px" required><?php echo $siswa['alamat'] ?></textarea>
                    </div>

                    <div class="form-group my-2">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> required>
                            <label class="form-check-label" for="jenis_kelamin1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> required>
                            <label class="form-check-label" for="jenis_kelamin2">
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group my-2">
                        <label for="agama">Agama</label>
                        <?php $agama = $siswa['agama']; ?>
                        <select class="form-select" name="agama" required>
                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?> >Islam</option>
                            <option <?php echo ($agama == 'Katolik') ? "selected" : "" ?> >Katolik</option>
                            <option <?php echo ($agama == 'Protestan') ? "selected" : "" ?> >Protestan</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?> >Hindu</option>
                            <option <?php echo ($agama == 'Buddha') ? "selected" : "" ?> >Buddha</option>
                            <option <?php echo ($agama == 'Konghucu') ? "selected" : "" ?> >Konghucu</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?> >Atheis</option>
                        </select>
                    </div>

                    <div class="form-group my-2">
                        <label for="sekolah_asal">Sekolah Asal: </label>
                        <input type="text" name="sekolah_asal" class="form-control rounded" placeholder="Sekolah asal" value="<?php echo $siswa['sekolah_asal'] ?>" required />
                    </div>

                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" required/>

                    <div class="form-group my-2">
                        <input class="btn btn-primary" type="submit" value="Simpan" name="simpan" />
                        <a class="btn btn-primary" href="index.php">Kembali</a>
                    </div>

                </form>
            </article>
        </section>

    </div>

</body>

</html>