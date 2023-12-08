<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portofolio";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

date_default_timezone_set('Asia/Makassar'); //setel zona waktu
$waktusekarang = date('H:i'); // Format H:i memberikan waktu dalam format 24 jam (00:00 - 23:59)\
if ($waktusekarang >= "00:00" && $waktusekarang < "12:00") {
    $salam = "Selamat Pagi👋";
} elseif ($waktusekarang >= "12:00" && $waktusekarang < "15:00") {
    $salam = "Selamat Siang👋";
} elseif ($waktusekarang >= "15:00" && $waktusekarang < "18:00") {
    $salam = "Selamat Sore👋";
} elseif ($waktusekarang >= "18:00" && $waktusekarang < "23:59") {
    $salam = "Selamat Malam👋";
} else {
    $salam = "waktu tidak valid";
}

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

function tambah($data)
{
    //ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $link = htmlspecialchars($data["link"]);

    //query insert data
    global $koneksi;
    $tambahdata = "INSERT INTO sertifikat VALUES('', '$nama', '$tanggal', '$gambar', '$deskripsi',' $link')";
    mysqli_query($koneksi, $tambahdata);

    return mysqli_affected_rows($koneksi);
}
function tambahprojek($data)
{
    //ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $link = htmlspecialchars($data["link"]);

    //query insert data
    global $koneksi;
    $tambahdata = "INSERT INTO projek VALUES('', '$nama', '$tanggal', '$gambar', '$deskripsi',' $link')";
    mysqli_query($koneksi, $tambahdata);

    return mysqli_affected_rows($koneksi);
}
