<?php
include "koneksi.php";
 $xnama = $_POST['nama'];
 $xidtamu= $_POST['idtamu'];
 $xemail = $_POST['email'];
 $xasalsekolah = $_POST['asalsekolah'];
 $xjeniskelamin = $_POST['jeniskelamin'];
 $xfak = $_POST ['fakultas'];
$sql = "insert into `table` (idtamu,nama, email, asalsekolah,jeniskelamin,fakultas) values ('$xidtamu','$xnama', '$xemail', '$xasalsekolah','$xjeniskelamin','$xfak')";
//echo $sql;
$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:daftar_tamu.php");
} else {
    echo "Tdk tdk  tersimpan";
}
