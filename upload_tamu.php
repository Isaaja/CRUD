<?php
include "koneksi.php";
$xnama = $_POST['nama'];
$xemail = $_POST['email'];
$xasalsekolah = $_POST['asalsekolah'];
$xjeniskelamin = $_POST['jeniskelamin'];
$xfak = $_POST ['fakultas'];
$sql = "update `table` set nama='$xnama',email='$xemail',asalsekolah='$xasalsekolah',jeniskelamin='$xjeniskelamin',fakultas='$xfak'";
//echo $sql;

$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:daftar_tamu.php");
} else {
    echo "Tdk dapat  tersimpan";
}
