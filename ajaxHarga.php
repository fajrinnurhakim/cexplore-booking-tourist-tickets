<?php
include 'koneksi/functions.php'; /* koneksi database */

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
    /* ambil data yang dibutuhkan */
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

    
    <div id="ajaxHarga">
     <div class="py-3 form-group">
        <div class="col-4 col-md-3">Harga Tiket</div> <!-- Baris output data dari pilihan wisata -->
        <div class="col-8 col-md-9 font-weight-bold py-0" id="hargaTiket">
            <span class=" text-success fw-bold font-weight-bold">
            Rp<?= number_format($wisata['price'],0,',','.'); ?></span></div> <!-- Baris output data harga dari pilihan wisata -->
     </div>
    </div>




    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="ajax.js"></script>
    
</body>

</html>