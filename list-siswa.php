<?php include("config.php"); ?>

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
            <h3>Siswa yang sudah mendaftar</h3>
        </header>

        <section class="mb-4 d-flex flex-column align-items-center justify-content-center">
            <article class="col-md-10">
                <table class="table table-striped table-hover mt-2">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Sekolah Asal</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM calon_siswa";
                        $query = mysqli_query($db, $sql);

                        while ($siswa = mysqli_fetch_array($query)) {
                            echo "<tr>";

                            echo "<td>" . $siswa['id'] . "</td>";
                            echo "<td>" . $siswa['nama'] . "</td>";
                            echo "<td>" . $siswa['alamat'] . "</td>";
                            echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                            echo "<td>" . $siswa['agama'] . "</td>";
                            echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                            echo "<td>";
                            echo "<a class=\"btn btn-sm btn-warning\" href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> ";
                            echo "<a class=\"btn btn-sm btn-danger\" href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <p>Total: <?php echo mysqli_num_rows($query) ?></p>
            </article>

            <article class="col-md-10">
                <a class="btn btn-primary" href="form-daftar.php">[+] Tambah Baru</a>
                <a class="btn btn-primary" href="index.php">Kembali</a>
            </article>
        </section>

    </div>

</body>

</html>