<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/logoayam.png">
    <title>Tugas Membuat anak Ayam</title>
</head>

<body>
    <div class="utama">
        <div class="container">
            <div class="row justify-content-md-center mt-12">
                <div class="col-sm-8 border-box kotak">
                    <div class="row">
                        <div class="col-sm-6 p-0">
                            <img src="img/anak.jpg" class="img-fluid">
                        </div>
                        <div class="col-sm-6 p-0">
                            <div class="card">
                                <div class="card-header">
                                    <h4> Chicks Data </h4>
                                </div>
                                <div class="card-body">
                                    <form method="get" action="tampilan.php">
                                        <div class="form-group">
                                            <label for="nama">Your Name</label>
                                            <input type="text" class="form-control" placeholder="Masukkan nama"
                                                name="nama" required autocomplete="off">
                                            <small class="form-text text-muted">Kami tidak akan pernah menyebarkan
                                                data-data
                                                tentang anak ayam anda ke siapapun.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ayam">Your Chicken</label>
                                            <input type="text" class="form-control" placeholder="Jumlah Ayam"
                                                name="ayam" required autocomplete="off">
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>&copy Copyright 2019 </p>
                    <button type="button" class="btn btn bg-danger img-thumbnail" href="youtube.com">Torangto
                        Situngkir</button>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>