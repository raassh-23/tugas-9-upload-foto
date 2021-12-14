<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body class="bg-light text-dark d-flex flex-column">

    <div class="container-fluid content flex-grow-1 d-flex flex-column justify-content-center">
        <header class="text-center mt-4">
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Coding</h1>
        </header>

        <section class="mb-4 d-flex flex-column align-items-center justify-content-center">
            <article class="col-md-6 text-center">
                <a class="btn btn-primary" href="form-daftar.php">Daftar Baru</a>
                <a class="btn btn-primary" href="list-siswa.php">Pendaftar</a>
            </article>
        </section>

        <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'sukses') {
                    echo "<p class=\"text-success text-center\">Pendaftaran siswa baru berhasil!";
                } else {
                    echo "<p class=\"text-danger text-center\">Pendaftaran siswa baru gagal!";

                    if ($_GET['error'] == 'upload_fail')
                        echo "<p class=\"text-danger text-center\">Tidak bisa mengupload foto";
                }
            }
        ?>
    </div>

</body>

</html>