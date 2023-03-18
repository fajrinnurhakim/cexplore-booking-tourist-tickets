<?php

include '../koneksi/functions.php';
session_start();

/* cek apakah yang mengakses halaman ini sudah login */
if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=gagal");
}

/* memanggil isi tabel pemesanan dari kolom id */
$ambil = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Pemesanan Tiket Wisata</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3 fixed-top">
        <div class="container">
            <img src="../image/Logoceb.png" alt="" width="30" height="30">
            <a class="navbar-brand" href="#">Cilacap<b>Explore</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pemesanantiket.php">Pemesanan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../koneksi/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-3">
        <div class="py-3">
        </div>
    </div>

    <div class="container">
        <div class="py-3 m-3 text-center">
            <h3>Daftar Pemesanan Tiket Wisata</h3>
        </div>
    </div>

    <div class="container">
        <table id="example" class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Nomor Identitas</th>
                    <th>No. HP</th>
                    <th>Tempat Wisata</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Pengunjung Dewasa</th>
                    <th>Pengunjung Anak-Anak</th>
                    <th>Harga Tiket</th>
                    <th>Total bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ambil as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nama_lengkap"]; ?></td>
                        <td><?= $row["no_identitas"]; ?></td>
                        <td><?= $row["no_hp"]; ?></td>
                        <td><?= $row["tempat_wisata"]; ?></td>
                        <td><?= $row["tanggal_kunjungan"]; ?></td>
                        <td><?= $row["pengunjung_dewasa"]; ?> Orang</td>
                        <td><?= $row["pengunjung_anak"]; ?> Orang</td>
                        <td>RP. <?= $row["harga_tiket"]; ?></td>
                        <td>RP. <?= $row["total_harga"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="m-3 py-3">
        <div class="py-3">
        </div>
    </div>

    

    <pre></pre>

    <footer class="p-3 bg-white text-dark text-center fixed-bottom border-top shadow">
        <div class="text-center text-dark">
        © 2023: Fajrin Nurhakim with 
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>
    
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    
    <script type="text/javascript" src="datables.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>

</html>