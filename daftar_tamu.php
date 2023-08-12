<?php
include "koneksi.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Buku Tamu</title>
</head>
<body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
  <div class="container">
    <a class="navbar-brand" ><span>W</span>elcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form action="d-flex justify-content-end align-item-center">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-5">
        <li class="nav-item ">
          <a class="nav-link me-4 active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="home.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="home.php">About</a></li>
            <li><a class="dropdown-item" href="home.php">News & Event</a></li>
            <li><a class="dropdown-item" href="home.php">Fakultas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="daftar_tamu.php">Daftar</a></li>
          </ul>
        </li>
        </form>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <br><br><br>
    <!-- <form action="" method="POST">    
    Nama : 
    <input type="text" name="nama" size="25" ><br>
    NIM :
    <input type="text" name="nim" size="25" ><br>
    <select name="fakultas">
         <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
         <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
         <option value="Fakultas Teknik">Fakultas Teknik</option>
     </select> <br>
    <input type="submit" value="Simpan"name="submit"> 
    </form> -->
    <div class="container"><center>
        <h1>Daftar Mahasiswa</h1>
        </center>
        <a href='add_tamu.php' class="btn btn-primary"> Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
             <tbody>
                <?php
                $sql = "select * from `table`";
                $res = mysqli_query($conn, $sql,);

                while ($r = mysqli_fetch_assoc($res)) {
                    echo "
                    <tr>
                        <td>" . $r['idtamu'] . "</td>
                        <td>" . $r['nama'] . "</td>
                        <td>" . $r['email'] . "</td>
                        <td>" . $r['asalsekolah'] . "</td>
                        <td>" . $r['jeniskelamin'] . "</td>
                        <td>" . $r['fakultas'] . "</td>
                        <td>
                          <a href='edit_tamu.php?idtamu=" . $r['idtamu'] . "' class='btn btn-primary'> Edit</a>
                            <a href='del_tamu.php?idtamu=" . $r['idtamu'] . "' class='btn btn-primary'> Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>