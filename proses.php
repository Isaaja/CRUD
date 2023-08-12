<?php
    include "koneksi.php";
    if (isset ($_POST['submit'])){
        $xnama = $_POST['nama'];
        $xemail = $_POST['email'];
        $xasalsekolah = $_POST['asalsekolah'];
        $xjeniskelamin = $_POST['jeniskelamin'];
        $xfak = $_POST ['fakultas'];
        $sql = "INSERT INTO `table` (nama, email, asalsekolah,jeniskelamin,fakultas) VALUES ('$xnama', '$xemail', '$xasalsekolah','$xjeniskelamin','$xfak')";
        mysqli_query($conn, $sql);
    }
    ?>
