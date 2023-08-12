<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <title> Membuat Database</title>
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
          <a class="nav-link me-4 active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#about">About</a></li>
            <li><a class="dropdown-item" href="#portofolio">News & Event</a></li>
            <li><a class="dropdown-item" href="#fakultas">Fakultas</a></li>
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
    <!-- Home -->
    <section class="home" id="home">
        <div class="container h-100 ">
        <div class="row h-100">   
        <div class="col-lg-6 d-flex flex-column justify-content-end content-left" style="height:570px;width:636px;">
            <h1 class="heading">UNIVERSITAS DIAN NUSWANTORO</h1>
                    <div class="btn-home mt-5">
                <a class="btn btn-buy py-2 px-3 px-lg-5 py-lg-3 " href="daftar_tamu.php">Daftar</a>
            </div>
        </div>
<div class="col-lg-6 d-flex flex-column justify-content-end content-left" style="height:570px;width:636px;">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/home1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home4.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</section>
<!--about -->
	<div id="about" class="about p-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-uppercase fw-bold fs-4 text-center p-5">
						<p>About</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="about">
						<img src="img/Logo_udinus1.jpg" width="70%" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-4">
					<div class="about-text justify-content-">
					<p>Universitas Dian Nuswantoro (UDINUS) Semarang adalah sebuah perguruan tinggi swasta yang berlokasi di kota Semarang, Jawa Tengah, Indonesia. UDINUS didirikan pada tahun 1956 dengan nama Akademi Komputer Indonesia (AKI),
             dan kemudian berganti nama menjadi Universitas Dian Nuswantoro pada tahun 2001.
          </p>
          <p>UDINUS menyediakan berbagai program studi baik di tingkat sarjana maupun pascasarjana, termasuk diantaranya adalah Teknik Informatika, Sistem Informasi, Desain Komunikasi Visual, Ilmu Komunikasi, Hukum, dan Manajemen Bisnis.
             Selain itu, UDINUS juga menawarkan program studi yang fokus pada bidang teknologi informasi dan komunikasi, sehingga sering dijuluki sebagai "Kampus TIK" oleh masyarakat.
          </p>          
          <p>UDINUS memiliki lingkungan kampus yang nyaman dan modern, dilengkapi dengan berbagai fasilitas seperti laboratorium komputer, perpustakaan, studio musik, dan pusat kebugaran.
             Selain itu, UDINUS juga aktif dalam berbagai kegiatan dan kompetisi nasional maupun internasional di bidang teknologi informasi dan komunikasi.
          </p>
          <p> Dalam kurun waktu 60 tahun sejak didirikan, UDINUS telah berhasil menghasilkan lulusan-lulusan yang berkualitas dan terampil di bidang teknologi informasi dan komunikasi serta bidang lainnya, yang siap berkontribusi dalam memajukan bangsa dan negara.
          </p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- News & Event --->
  <div id="portofolio" class="portfolio p-5">
		<div class="container" >
			<div class="row">
				<div class="col-12">
					<div class="text-uppercase text-center fw-bold fs-4 p-5">
						<p>News & Event</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card mt-4 shadow">
            <a href="https://dinus.ac.id/getnews/3484/akomodir-calon-mahasiswa-udinus-buka-jalur-pmdk-4-hingga-awal-mei">
              <img src="img/info_udinus2.jpeg" width="100%" height="" alt="...">
            </a>
						<div class="card-body">
							<h5 class="portfolio-title">AKOMODIR CALON MAHASISWA, UDINUS BUKA JALUR PMDK 4 HINGGA AWAL MEI</h5>
							<p class="portfolio-subtitle">Universitas Dian Nuswantoro Semarang buka Penerimaan Mahasiswa Baru (PMB)  jalur Penelusuran Minat Dan Kemampuan (PMDK) tahap ke-4.
                 Pembukaan pendaftaran tahap tersebut sebagai satu cara untuk mengakomodir para calon mahasiswa baru dari berbagai provinsi di Indonesia.
                Jalur PMDK 4 ini dibuka mulai dari tanggal 4 April hingga 1 Mei 2023.
              <p>Sementara itu, Pengumuman jalur PMDK gelombang ke-4 Udinus ini akan diumumkan pada tanggal 2 Mei 2023 dan dengan batas registrasi hingga 26 Mei 2023.
              Dalam penerimaan mahasiswa baru (PMB) di Udinus untuk tahun ajaran 2023/2024 . <br><br>
              </div>
					</div>
				</div>
        <div class="col-lg-4">
					<div class="card mt-4 shadow">
            <a href="https://dinus.ac.id/getnews/3494/tak-lelah-untuk-mencoba-yolanda-marcela-berhasil-lolos-program-iisma-2023">
						<img src="img/info_udinus1.jpeg" width="415px" height="415px"alt="..."></a>
						<div class="card-body">
							<h5 class="portfolio-title">TAK LELAH UNTUK MENCOBA, YOLANDA MARCELA BERHASIL LOLOS PROGRAM IISMA 2023</h5>
							<p class="portfolio-subtitle">Yolanda Marcela Binambuni, mahasiswi yang kini berkuliah di Program Studi S-1 Bahasa Inggris Universitas Dian Nuswantoro (Udinus) Semarang terus menorehkan prestasi yang membanggakan. Kini, mahasiswi yang akrab disapa Yolanda berhasil terpilih menjadi Awardee di program Indonesian Internasional Student Mobility Awards (IISMA) 2023
                Melalui program tersebut, ia menjadi salah satu wakil Udinus dan akan melaksanakan pertukaran pelajar di The University of Auckland, New Zealand.
               <p> Program pertukaran pelajar internasional itu merupakan program yang diselenggarakan oleh Kementerian Pendidikan, Kebudayaan,Riset, dan Teknologi (Kemdikbudristek) dan Lembaga Layanan Pendidikan Tinggi (LLDIKTI).
            </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card mt-4 shadow">
            <a href="https://dinus.ac.id/getnews/3492/raih-prestasi-tertinggi-prodi-s-1-manajemen-udinus-pertahankan-raih-akreditasi-unggul">
						<img src="img/info_udinus3.jpg" width="100%"alt="..."> </a>
						<div class="card-body">
							<h5 class="portfolio-title">RAIH PRESTASI TERTINGGI, PRODI S-1 MANAJEMEN UDINUS PERTAHANKAN RAIH AKREDITASI UNGGUL</h5>
							<p class="portfolio-subtitle">Prodi S-1 Manajemen Universitas Dian Nuswantoro (Udinus) kembali 
                meraih akreditasi Unggul dan mampu mempertahankan akreditasi berlaku hingga 5 tahun kedepan.
                AKreditasi tersebut diraih dari Lembaga Akreditasi Mandiri Ekonomi Manajemen Bisnis Dan Akuntansi (Lamemba)
                yang telah melakukan visitasi pada beberapa waktu lalu.</p>
              <p>Akreditasi Unggul yang disematkan di Prodi S-1 Manajemen Udinus tercantum dalam sertifikat
                akreditasi dengan nomor 385/DE/A.5/AR.10/IV/2023. Pada sertifikat akreditasi tersebut menyatakan bahwa 
                Prodi S-1 Manajemen Udinus berhak menyandang status unggul berlaku mulai 17 April 2023 sampai dengan 17 April 2028. 
  						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fakultas --->
  <div id="fakultas" class="container" >
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/fakultas_fik.png" class="d-block w-100" alt="...">
      <br><br>
      <h2>Faculty Of Computer Science</h2>
      <p>Being the most prominent choice in informatics studies with entrepreneurial capacities as the privilege one is a mission for the faculty to accomplish.
         With sophisticated infrastructures, qualified lecturers, and excellent programs, the faculty has obviously completed the mission.
         As a result, the faculty of computer sciences is considered as the mainstay of Dian Nuswantoro University of Semarang.</p>
         <p>
          Computer sciences and informatics is Dian Nuswantoro's realization on social services in providing a real contribution for government
          by preparing incalculable people to become professionals with higher competences, especially in the field of computer sciences and informatics technology.
          By acquiring the knowledge of computer sciences and informatics, it is expected that the quality of human resources are improving that they may confidently
          compete with the others in this globalization era. In facts, globalization has influenced various aspects of human life and rapid economy development,
          such as in the relationship between technology and computer sciences, as well as the information technology which requires more on its effectiveness and efficiency.
         </p>
         <p>
          All graduates from the faculty of computer sciences of Dian Nuswantoro University are highly knowledgeable and undoubtedly skillful that they surely are capable of implementing 
          their advance knowledge and skills as their basic competences in creating various developments for better Indonesia.
          <p>This commitment is considered as one essential role for private organization in educational sector aiming at improving its quality and competitiveness regarding to the Indonesian
          human resources in facing this globalization era upon the values and special features as the determining factors of those economic agents in general, and computer sciences in particular.
          Nowadays, this largest faculty at Dian Nuswantoro University is in its organizational processes on several excellent programs, such as twinning, sitting, credit transfer, vocational, and fast tract programs.
         </p>
    </div>
  </div>
</div>
<div class="team p-5">
		<div class="container text-center">
			<div class="row">
				<div class="col-12">
					<div class="text-uppercase text-center fw-bold fs-4 p-5">
						<p>Executive Officers</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 mt-4">
					<img src="img/dosen_2.jpg" style="width: 128px; height: 128px;" alt="" class="rounded-circle">
					<h4 class="mt-3" style="font-family: 'Merriweather',serif;">Dean</h4>
          <h5 class="mt-3" style="font-family: 'Merriweather',serif; color: red;">Dr. Drs. ABDUL SYUKUR MM</h5>
        </div>
				<div class="col-sm-6 col-md-4 col-lg-4 mt-4">
					<img src="img/dosen_3.jpg" style="width: 128px; height: 128px;" alt="" class="rounded-circle">
					<h4 class="mt-3" style="font-family: 'Merriweather',serif;">Vice Dean</h4>
          <h5 class="mt-3" style="font-family: 'Merriweather',serif; color: red;">Dr. AHMAD ZAINUL FANANI SSi, M.Kom</h5>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 mt-4">
					<img src="img/dosen_4.png" style="width: 128px; height: 128px;" alt="" class="rounded-circle">
					<h4 class="mt-3" style="font-family: 'Merriweather',serif;">Vice Dean</h4>
          <h5 class="mt-3" style="font-family: 'Merriweather',serif; color: red;">AFFANDY M.Kom, Ph.D.</h5>
				</div>
			</div>
		</div>
	</div>
  <br><br>
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/fakultas_feb.png" class="d-block w-100" alt="...">
      <br><br>
      <h2>Faculty Of Economics And Business</h2>
      <p> The Faculty of Economics and Business, is a faculty that provides education for students in the fields of Economics and Business.
          This faculty is designed to profoundly prepare students to become professionals who have the ability to catch up in intense dynamic
          industry and business challenge today and the near future.</p>
         <p>
           The alumni of this faculty are forged to have broad minded, excellent personality, extensive knowledge and good skills to contribute in the various agencies,
           both government and private whether in national and international levels. Our faculty has developed intensive collaboration with various international universities
           as well as various industries and businesses to bridge the gap of skills between university and business sectors. Our Faculty of Economics and Business has three
           study programs namely 1. Management (Business) national accreditation is Unggul (Excellent), 2. Accounting, national accreditation is A (Excellent), 3. Master of Management
           Program national accreditation is A (Excellent) and 4. Ph. D program in Management, national accreditation is Good. In general, the national accreditation of
           Universitas Dian Nuswantoro is Unggul (Excellent) it is an outstanding achievement among 15 universities out of 4,600 universities throughout Indonesia.
         </p>
    </div>
  </div>
</div>
<div class="team p-5">
		<div class="container text-center">
			<div class="row">
				<div class="col-12">
					<div class="text-uppercase text-center fw-bold fs-4 p-1">
						<p>Executive Officers</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-6 mt-4">
					<img src="img/dosen_5.png" style="width: 128px; height: 128px;" alt="" class="rounded-circle">
					<h4 class="mt-3" style="font-family: 'Merriweather',serif;">Dean</h4>
          <h5 class="mt-3" style="font-family: 'Merriweather',serif; color: red;">Prof. Vincent Didiek Wiet Aryanto MBA, Ph.D</h5>
        </div>
				<div class="col-sm-6 col-md-4 col-lg-6 mt-4">
					<img src="img/dosen_6.png" style="width: 128px; height: 128px;" alt="" class="rounded-circle">
					<h4 class="mt-3" style="font-family: 'Merriweather',serif;">Vice Dean</h4>
          <h5 class="mt-3" style="font-family: 'Merriweather',serif; color: red;">DR. RETNO INDAH HERNAWATI SE, M.Si</h5>
				</div>
			</div>
		</div>
	</div>
</div>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
</head>
<body>

</body>
</html>