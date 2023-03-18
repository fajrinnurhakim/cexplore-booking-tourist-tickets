<?php
include 'koneksi/functions.php'; /* import fungsi koneksi database */
$ambil = mysqli_query($conn, "SELECT * FROM wisata ORDER BY id_wisata DESC"); /* mengambil data dari tabel wisata dari kolom id_wisata */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Harga Tiket</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3 fixed-top"> <!-- navbar -->
        <div class="container">
            <img src="image/Logoceb.png" alt="" width="30" height="30">
            <a class="navbar-brand" href="#">Cilacap<b>Explore</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tempat Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tssegara.php">Segara Anakan</a></li>
                            <li><a class="dropdown-item" href="tscurug.php">Curug Mandala</a></li>
                            <li><a class="dropdown-item" href="tsteluk.php">Teluk Penyu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hargatiket.php">Harga Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pesantiket.php">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="gy-3 py-3">
        <div class="gy-3 py-3">
        </div>
    </div>


    <section>
        <div class="container">
            <div class="row py-3 gy-3">
                <div class="col-12 text-center">
                    <h1>Harga Tiket</h1>
                </div>
                <table class="table table-striped"> <!-- tabel harga masing-masing tempat wisata -->
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Tempat Wisata</th>
                            <th scope="col">Harga Tiket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($ambil as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama_wisata"]; ?></td>
                                <td><?= $row["price"]; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <pre></pre>

    <footer class="p-3 bg-white text-dark text-center fixed-bottom border-top shadow">
        <div class="text-center text-dark">
        © 2023: Fajrin Nurhakim with 
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>