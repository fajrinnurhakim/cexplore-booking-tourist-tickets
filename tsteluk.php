<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- import style css bootstrap -->
    <title>Teluk Penyu</title>
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
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tempat Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tssegara.php">Segara Anakan</a></li>
                            <li><a class="dropdown-item" href="tscurug.php">Curug Mandala</a></li>
                            <li><a class="dropdown-item" href="tsteluk.php">Teluk Penyu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="hargatiket.php">Harga Tiket</a>
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
                    <h1>Teluk Penyu</h1>
                    <iframe class="py-3" width="560" height="315" src="https://www.youtube.com/embed/kbfG10XhFF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <!-- embed video yt -->
                    <p>Pantai Teluk Penyu terletak di dalam kota Cilacap, tepatnya di Kelurahan Cilacap, Kecamatan Cilacap Selatan. Obyek Wisata ini merupakan obyek wisata andalan yang dimiliki Kabupaten Cilacap, jaraknya sangat dekat dengan Pusat Pemerintahan / Pusat Kota yaitu hanya sekitar ± 2 km. Panorama Pulau Nusakambangan dan Kapal Tanker pengangkut minyak yang menjadi pemandangan khas pantai ini. Pantai ini berpasir dan banyak ditumbuhi pepohonan sehingga memberikan rasa keteduhan bagi para pengunjung. Panorama keindahan Pantai laut yang indah ternyata dapat dinikmati oleh wisatawan tidak hanya pada saat matahari terbit pagi hari tapi juga matahari terbenam pada sore hari (sunset) di ujung sisi selatan. Pantai Teluk Penyu terdapat daya tarik wisata Benteng pendem dan Kilang pengolahan minyak milik PT. Pertamina, dimana lokasi ini menjadi obyek vital nasioal.</p>
                </div>
            </div>
        </div>
    </section>

    <pre></pre>

    <footer class="p-3 bg-white text-dark text-center fixed-bottom border-top shadow"> <!-- footer -->
        <div class="text-center text-dark">
        © 2023: Fajrin Nurhakim with 
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>


    <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- script bootstrapjavascript untuk navbar collapse -->
</body>

</html>