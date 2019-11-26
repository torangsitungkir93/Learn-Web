<!-- Author : Torangto Situngkir
 -->
<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" href="assets/img/bar.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penggunaan Mysqli dan PHP </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                        ClAY ADMIN <i class="fa fa-home"></i>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item <?php if ($page == "index") echo "active";  ?>">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-icon
                            <?php if ($page == "edit") echo 'nc-bullet-list-67'; ?>
                            <?php if ($page == "index" || $page == "tambah") echo 'nc-paper-2'; ?> 
                            "></i>
                            <p>Daftar Peserta </p>
                        </a>
                    </li>
                    <?php if ($page == 'edit') { ?>
                    <li class="nav-item active">
                        <i class="nc-icon nc-stre-down nc-align-center"> </i>
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-icon nc-settings-tool-66"></i>
                            <p>Edit Data Peserta </p>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="nav-item <?php if ($page == "tambah") echo "active"; ?>">
                        <a class="nav-link" href="tambah.php">
                            <i class="nc-icon nc-simple-add"></i>
                            <p>Input Data Peserta </p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="javascript:;">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade plan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <!-- buat search -->
                <div class="container-fluid">
                    <?php if ($page == 'index') {
                        $tombolsearch = "";
                        $warna = "btn-primary";
                        $place = "Search .... ";
                    } else {
                        $tombolsearch = "disabled";
                        $warna = "btn-danger";
                        $place = "Hal ini tidak bisa Search :)";
                    } ?>
                    <form class="form-inline" method="get" action="">
                        <input class="form-control mr-sm-2" type="search" placeholder="<?= $place ?>"
                            aria-label="Search" name="nilai" required>
                        <button class="btn btn-outline-success my-2 my-sm-0 <?= $warna ?>" <?php echo "$tombolsearch" ?>
                            type="submit" name="search">Search</button>
                    </form>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>