<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Login Aplikasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container">
        <section class="login-box">
            <?php
            if (isset($_GET['pesan'])) {
                if (($_GET['pesan']) == 'gagal') {
                    echo "<p style='color:red;font-style:italic;'> Username / Password Salah </p>";
                } elseif (($_GET['pesan']) == 'belum') {
                    echo "<p style='color:navy;font-style:italic;'> Anda Belum Login </p>";
                } elseif (($_GET['pesan']) == 'logout') {
                    echo "<p style='color:green;font-style:italic;'> Anda Berhasil Logout </p>";
                }
            }
            ?>
            <h2>Login </h2>
            <form method="POST" action="cek_login.php">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="Login">
            </form>
    </div>
    </div>
</body>

</html>