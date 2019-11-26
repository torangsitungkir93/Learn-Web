<?php

$conn = mysqli_connect("localhost", "root", "", "makrab");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function query_search($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jk = htmlspecialchars($data['jk']);
    $agama = htmlspecialchars($data['agama']);
    $umur = htmlspecialchars($data['umur']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO peserta_makrab VALUES
            (
                '','$nama','$email','$jk','$agama','$umur','$alamat'
            )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = ($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jk = htmlspecialchars($data['jk']);
    $agama = htmlspecialchars($data['agama']);
    $umur = htmlspecialchars($data['umur']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE peserta_makrab SET 
            nama='$nama',
            email='$email',
            jk='$jk',
            agama='$agama',
            umur='$umur',
            alamat='$alamat'
            WHERE id=$id ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM peserta_makrab WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}