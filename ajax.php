<?php
include 'koneksi/functions.php';

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

    <?php 
    $pengunjung_dewasa = $_GET["pengunjung_dewasa"];
    $pengunjung_anak = $_GET["pengunjung_anak"];
    $tempat_wisata = $_GET["tempat_wisata"];

    $query = "SELECT * FROM wisata
          WHERE
          nama_wisata = '$tempat_wisata'
            ";
    $wisata = query($query)[0];

    if (empty($wisata)){
      $error = true;
    }

     ?>


    <?php if ($pengunjung_dewasa == NULL OR $pengunjung_dewasa == "") {
        $pengunjung_dewasa = 0;
    }; ?>

    <?php if ($pengunjung_anak == NULL OR $pengunjung_anak == "") {
        $pengunjung_anak = 0;
    }; ?>


    <div id="ajaxTotal">
     <div class="py-3 form-group">
        <div class="col-4 col-md-3">Total Bayar</div> <!-- Baris output data dari jumlah pengunjung -->
        <div class="col-8 col-md-9 font-weight-bold py-0" id="totalBayar"> 
            <span class=" text-success fw-bold font-weight-bold">
            <?php 
            $harga_tiket = $wisata['price'];
            $total_dewasa = $wisata['price'] * $pengunjung_dewasa;
            $total_anak = ($wisata['price'] / 2) * $pengunjung_anak;

            $total = $total_anak + $total_dewasa;
             ?>
           </span></div>
            Rp<?= number_format($total,0,',','.'); ?> <!-- Baris output data biaya dari jumlah pengunjung dewasa & anak-anak -->
     </div>
    </div>                 
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="ajax.js"></script>
    
</body>

</html>