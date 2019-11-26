<?php

include 'function.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "Hapus Berhasil";
    header('location: index.php?cek=sudah');
} else {
    echo "Data gagal Dihapus";
    header('location: index.php?cek=belum');
}