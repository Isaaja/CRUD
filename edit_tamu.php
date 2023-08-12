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
    <?php
    $xidtamu = $_GET['idtamu'];
    $sql = "select * from `table` idtamu='$xidtamu'";
    $res = mysqli_query($conn, $sql,);
    while ($r = mysqli_fetch_assoc($res)) {
        $nama = $r['nama'];
        $xemail = $r['email'];
        $xasalsekolah = $r['asalsekolah'];
        $xjeniskelamin = $r['jeniskelamin'];
        $xfakultas = $r['fakultas'];
    }
    ?>
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
          <a class="nav-link me-4" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#about">About</a></li>
            <li><a class="dropdown-item" href="#portofolio">News & Event</a></li>
            <li><a class="dropdown-item" href="#portofolio">Fakultas</a></li>
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
    <br> <br> <br> <br>
   <!-- Buku Tamu -->
    <div class="container" id="bukutamu">
    <center><h1> Daftar</h1></center>
        <div class="card">
            <div class="card-header">
                Form Daftar
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation" method="post" action="upload_tamu.php" novalidate>
  <div class="col-md-7 position-relative">
    <label for="validationTooltip01" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="validationTooltip01" placeholder="Masukkan Nama Lengkap" name="nama" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
      <input type="email" class="form-control" id="validationTooltipUsername" value="" aria-describedby="validationTooltipUsernamePrepend" placeholder="Masukkan Email Anda" name="email"required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Asal Sekolah</label>
     <select class="form-select" id="validationTooltip04" name="asalsekolah" required>
      <option selected disabled>Masukkan Asal Sekolah</option>
      <option>SMAN 1 PATI</option>
      <option>SMAN 1 KUDUS</option>
      <option>SMAN 1 DEMAK</option>
      <option>SMAN 1 SEMARANG</option>
    </select>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">Jenis Kelamin</label>
    <select class="form-select" id="validationTooltip04" name="jeniskelamin" required>
      <option selected disabled value="">Masukkan Jenis Kelamin</option>
      <option>Laki-Laki</option>
      <option>Perempuan</option>
      <option>Lainnya...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">Fakultas</label>
    <select class="form-select" id="validationTooltip04" name="fakultas" required>
      <option selected disabled value="">Pilih Fakultas</option>
      <option>Fakultas Ilmu Komputer</option>
      <option>Fakultas Ekonomi Bisnis</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-12">
   <input type="submit"  class="btn btn-primary" value="Simpan" name="submit">
  </div>
</form>
            </div>
            </form>
        </div>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
	<!-- footer -->
	<footer class="footer bg-dark p-3">
		<div class="container">
			<div class="row text-light">
       
				<div class="col-6 text-lg-start text-sm-start">
					Copyright © 2023 Basicly. All Rights Reserved
				</div>
				<div class="col-6 text-lg-end text-sm-end">
					Privacy Policy Terms & Condition
				</div>
			</div>
		</div>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>