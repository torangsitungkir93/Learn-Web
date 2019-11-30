<?php

$nama = $_GET["nama"];
$ayam = $_GET["ayam"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Halaman Anak Ayam</title>
</head>

<body class="my-bg">
    <header>
        <h1 align="center" class="text">Tampilan Program Ayam</h1>
    </header>
    <div class="tampilan">
        <div class="my-content overflow-auto ">
            <?php
            for ($i = $ayam; $i >= 0; $i--) {
                if ($i == $ayam) {
                    ?>
            <p class="btn btn-success kt-1">Ayam pak <?php echo "$nama = $i" ?></p>
            <hr>
            <?php
                    } else if ($i > 0 && $i < $ayam) {
                        ?>
            <p class="btn btn-warning"> Mati 1 tinggal <?= $i ?></p>
            <br>
            <p class="btn btn-warning"> Sisa <?= $i ?></p>
            <br>
            <?php
                    } else {
                        ?>
            <hr>
            <p class="btn btn-danger"> Mati semua pak <?= $nama ?> beli sapi !</p>
            <hr>
            <?php
                }
            } ?>
            <a href="index.php"><button type="submit" class="btn btn-primary kembali">Kembali</button></a>
        </div>
        <footer class="text-dark">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p>&copy Copyright 2019 </p>
                        <button type="button" class="btn btn bg-s img-thumbnail" href="youtube.com">Torangto
                            Situngkir</button>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous">
</script>

</html>
<!-- ---- -->