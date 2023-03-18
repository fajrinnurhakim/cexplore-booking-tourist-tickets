<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Beranda</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3 fixed-top">
        <div class="container">
            <img src="image/Logoceb.png" alt="" width="30" height="30">
            <a class="navbar-brand" href="#">Cilacap<b>Explore</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
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

    <div class="py-3">
        <div class="py-3">
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> <!-- carousel tempat wisata -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/carousel1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="bg-black">Cilacap Explore</h5>
                    <p>Pesan Tiket Wisatamu Sekarang dan Explore Semua Wisata Cilacap!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/carousel2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Segara Anak</h5>
                    <p>Nikmati berbagai jenis mangrove dan berbagai Ikan disini.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/carousel3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Curug Mandala</h5>
                    <p>Nikmati kesegaran air terjun yang memancar deras dari sela-sela batuannya.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/carousel4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Teluk Penyu</h5>
                    <p>Menatap Samudera Hindia dari pantai Teluk Penyu.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> <!-- button sebelumnya -->
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"> <!-- button selanjutnya -->
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <pre></pre>

    <section>
        <div class="container">
            <div class="row gy-3">
                <div class="col-12 text-center">
                    <h1>Jelajahi Tempat Wisata</h1>
                </div>
                <div class="col-md-4"> <!-- card tempat wisata -->
                    <div class="card rounded-3" style="width: 18rem;">
                        <img src="image/1.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Segara anak</h5>
                            <p class="card-text">Sawah, Ujunggagak, Kec. Kp. Laut, Kabupaten Cilacap, Jawa Tengah</p>
                            <a href="tssegara.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-3" style="width: 18rem;">
                        <img src="image/2.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Curug Mandala</h5>
                            <p class="card-text">Mendala, Kec. Jeruklegi, Kabupaten Cilacap, Jawa Tengah 53274.</p>
                            <a href="tscurug.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card rounded-3" style="width: 18rem;">
                        <img src="image/3.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Teluk Penyu</h5>
                            <p class="card-text">Jl. Laut, Pandanarang,Cilacap Sel., Kabupaten Cilacap, Jawa Tengah</p>
                            <a href="tsteluk.php" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <pre></pre>

    <footer class="p-3 bg-white text-dark text-center position-relative border-top shadow">
        <div class="text-center text-dark">
            © 2023: Fajrin Nurhakim with 
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>