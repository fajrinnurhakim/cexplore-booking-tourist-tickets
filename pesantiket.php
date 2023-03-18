<?php
include 'koneksi/functions.php';

function regis($data)
{

    global $conn; /* panggil variabel koneksi */

    /* ambil data dari form */
    $nama_lengkap = ($data["nama_lengkap"]);
    $no_identitas = ($data["no_identitas"]);
    $no_hp = ($data["no_hp"]);
    $tempat_wisata = ($data["tempat_wisata"]);
    $tanggal_kunjungan = ($data["tanggal_kunjungan"]);
    $nama_lengkap = ($data["nama_lengkap"]);
    $pengunjung_dewasa = ($data["pengunjung_dewasa"]);
    $pengunjung_anak = ($data["pengunjung_anak"]);

    /* memanggil tabel wisata dari kolom tempat wisata */
    $query = "SELECT * FROM wisata
          WHERE
          nama_wisata = '$tempat_wisata'
            ";
    $wisata = query($query)[0];

    /* harga tiket */
    $harga_tiket = $wisata['price'];
    $total_dewasa = $wisata['price'] * $pengunjung_dewasa;
    $total_anak = ($wisata['price'] / 2) * $pengunjung_anak;

    $total = $total_anak + $total_dewasa;


    /* memasukkan inputan form ke tabel */
    mysqli_query($conn, "INSERT INTO pemesanan VALUES(
        NULl, 
        '$nama_lengkap',
        '$no_identitas',
        '$no_hp',
        '$tempat_wisata',
        '$tanggal_kunjungan',
        '$pengunjung_dewasa',
        '$pengunjung_anak',
        '$harga_tiket',
        '$total'
    )");
    return mysqli_affected_rows($conn);
}
/* logika button post */
if (isset($_POST["add"])) {
    /* fungsi regis bernilai 0 */
    if (regis($_POST) > 0) {
        echo "<script>
            alert('Berhasil!');
            window.location.href='index.php'
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pesan Tiket</title>
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
                        <a class="nav-link " aria-current="page" href="hargatiket.php">Harga Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pesantiket.php">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="m-3 gy-3 py-3">
        <div class="gy-3 py-3">
        </div>
    </div>



    <section>
        <div class="py-3 gy-3 container">
            <div class="card">
                <div class="card-header">
                    Form Pemesanan Tiket
                </div>
                <div class="py-3 container">
                    <form action="" id="formPesan" method="post" novalidate>
                        <div class="py-3 form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama_lengkap" name="nama_lengkap" required> <!-- Diwajibkan untuk input data  nama lengkap -->
                        </div>
                        <div class="py-3 form-group">
                            <label for="no_identitas">Nomor Identitas</label>
                            <input type="number" class="form-control" placeholder="Masukkan Nomor KTP Angka 16 Digit" id="no_identitas" name="no_identitas" required> <!-- Diwajibkan untuk input data  no identitas -->
                        </div>
                        <div class="py-3 form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="number" class="form-control" placeholder="Masukkan Nomor HP" id="no_hp" name="no_hp" required> <!-- Diwajibkan untuk input data  no hp -->
                        </div>
                        <div class="py-3 form-group">
                            <label for="tempat_wisata">Pilih Tempat Wisata</label>
                            <select class="form-control" id="tempat_wisata" name="tempat_wisata" required> <!-- Diwajibkan untuk input data tempat wiata -->
                                <option value="">Pilih Tempat Wisata</option>
                                <?php $wisata = mysqli_query($conn, "SELECT * FROM wisata ORDER BY id_wisata DESC"); ?>
                                <?php foreach ($wisata as $key) : ?>
                                    <option value="<?= $key['nama_wisata']; ?>"><?= $key['nama_wisata']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="py-3 form-group">
                            <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                            <input type="date" min="<?= date('Y-m-d') ?>" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" required> <!-- Diwajibkan untuk input data tanggal -->
                        </div>
                        <div class="py-3 form-group">
                            <label for="pengunjung_dewasa">Pengunjung Dewasa</label>
                            <input type="number" class="form-control" id="pengunjung_dewasa" name="pengunjung_dewasa" required> <!-- Diwajibkan untuk input data Pengunjung dewasa -->
                        </div>
                        <div class="py-3 form-group row">
                            <label for="pengunjung_anak">
                                <span>Pengunjung Anak-Anak</span><br>
                                <span class="small">Usia di bawah 12 tahun</span> <!-- Baris input data Pengunjung Anak-Anak -->
                            </label>
                            <div>
                                <input type="number" class="form-control" id="pengunjung_anak" name="pengunjung_anak" required> <!-- Diwajibkan untuk input data Pengunjung Anak-Anak -->
                            </div>
                        </div>
                        <div id="ajaxHarga" class="object">
                            <div class="py-3 form-group">
                                <div class="col-4 col-md-3">Harga Tiket</div> <!-- Baris output data dari pilihan wisata -->
                                <div class="col-8 col-md-9 font-weight-bold py-0" id="hargaTiket">
                                    <span class=" text-success fw-bold font-weight-bold">
                                        Rp 0</span>
                                </div> <!-- Baris output data harga dari pilihan wisata -->
                            </div>
                        </div>
                        <div id="ajax" class="object">
                            <div class="py-3 form-group">
                                <div class="col-4 col-md-3">Total Bayar</div> <!-- Baris output data dari jumlah pengunjung -->
                                <div class="col-8 col-md-9 font-weight-bold py-0" id="totalBayar">Rp 0</div> <!-- Baris output data biaya dari jumlah pengunjung dewasa & anak-anak -->
                            </div>
                        </div>

                        <div class="py-3 form-check">
                            <input class="form-check-input" type="checkbox" name="checklist" id="checklist" required> <!-- Diwajibkan checkbox -->
                            <label class="form-check-label" for="checklist">
                                Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                            </label>
                        </div>
                        <div class="row py-3">
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <button type="button" id="checkHarga" class="btn btn-primary">Hitung Total Bayar</button> <!-- Mengkalkulasi total biaya dari pengunjung terhadap pilihan wisata -->
                            </div>
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <button type="submit" name="add" class="btn btn-success">Pesan Tiket</button> <!-- Input data form yang sudah diisi lengkap disimpan ke database wisata -->
                            </div>
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <button type="reset" class="btn btn-secondary">Cancel</button> <!-- Mereset semua input data pada form -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <pre></pre>
    <div class="m-3 py-3">
        <div class="">
        </div>
    </div>

    <footer class="p-3 bg-white text-dark text-center fixed-bottom border-top shadow">
        <div class="text-center text-dark">
        © 2023: Fajrin Nurhakim with 
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="ajax.js"></script> <!-- import script ajax untuk total harga -->
    <script src="ajaxHarga.js"></script> <!-- import script ajax untuk harga tempat -->
    <script>
        /* Validasi input data form */
        $(document).ready(function() {
            const currency = new Intl.NumberFormat('id-ID');
            $.validator.setDefaults({
                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                errorElement: 'span',
                errorClass: 'text-danger',
                errorPlacement: function(error, element) {
                    if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });


            /* Validasi input data No. Identitas form */
            $('#formPesan').validate({
                rules: {
                    no_identitas: {
                        maxlength: 16,
                        minlength: 16
                    }
                },
                messages: {
                    no_identitas: {
                        maxlength: "isian salah..data harus 16 digit",
                        minlength: "isian salah..data harus 16 digit"
                    }
                },
            })
        })
    </script>
</body>

</html>