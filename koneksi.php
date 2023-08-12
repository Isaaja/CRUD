<?php
$host = "localhost";
$user = "root";
$password = "";
$dbase = "mhsudinus";
$port = 3308;
$conn = mysqli_connect($host, $user, $password, $dbase, $port);
if (!$conn) {
    die("koneksi gagal..");
}
