<?php
session_start();
$link = mysqli_connect('localhost', 'root', '', 'makrab');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' && password='$password'";
$data = mysqli_query($link, $sql) or die(mysqli_error($link));

$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header('location:index.php');
} else {
    header("location:login.php?pesan=gagal");
}