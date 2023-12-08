<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portofolio";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);


function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}