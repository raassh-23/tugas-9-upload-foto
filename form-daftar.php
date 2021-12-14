<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body class="bg-light text-dark d-flex flex-column">
    <div class="container-fluid content flex-grow-1 d-flex flex-column justify-content-center">
        <header class="text-center mt-4">
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <section class="mb-4 d-flex flex-column align-items-center justify-content-center">
            <article class="col-md-6">
                <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group my-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control rounded" placeholder="Nama lengkap" required />
                    </div>

                    <div class="form-group my-2">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat siswa" style="width: 100%; height: 150px" required></textarea>
                    </div>

                    <div class="form-group my-2">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki" required>
                            <label class="form-check-label" for="jenis_kelamin1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan" required>
                            <label class="form-check-label" for="jenis_kelamin2">
                                Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group my-2">
                        <label for="agama">Agama</label>
                        <select class="form-select" name="agama" required>
                            <option>Islam</option>
                            <option>Katolik</option>
                            <option>Protestan</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Konghucu</option>
                            <option>Atheis</option>
                        </select>
                    </div>

                    <div class="form-group my-2">
                        <label for="sekolah_asal">Sekolah Asal: </label>
                        <input type="text" name="sekolah_asal" class="form-control rounded" placeholder="Sekolah asal" required />
                    </div>

                    <div class="form-group my-2">
                        <label for="foto" class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" id="foto" required>
                    </div>

                    <div class="form-group my-3">
                        <input class="btn btn-primary" type="submit" value="Daftar" name="daftar" />
                        <a class="btn btn-primary" href="index.php">kembali</a>
                    </div>

                </form>
            </article>
        </section>

    </div>

</body>

</html>