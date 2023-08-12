<?php
include "koneksi.php";
$xnama = $_GET['nama'];
$xidtamu = $_GET['idtamu'];
$sql = "delete from  `table` where idtamu='$xidtamu'";
$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:daftar_tamu.php");
} else {
    echo "Tdk tdk  tersimpan";
}
