<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portal Donasi-Ku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.3.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><span>Portal Donasi</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Program</a></li>
          <li><a class="nav-link scrollto" href="#features">Register</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
         
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h2>Selamat Datang Di <span>Portal Donasi Yayasan Se-Kabupaten Kudus</span></h2>
            <h2>Bantu Saudara Kita untuk meringankan beban mereka</h2>
            <div class="text-center text-lg-start">
              <a href="register.php" class="btn-get-started scrollto">Register</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="images/posyandu.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
    <div class="container">
    <div class="span4">
          <h3>List<strong> Program</strong></h3>
        </div>
      <div class="row">
        <div class="features">
            <div class="card mb-3">
              <div class="card-header">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Yayasan</th>
        <th>Program</th>
        <th>Alamat</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
        
   
        <?php
        	include_once("koneksi.php");
            $sql_tampil = "SELECT * FROM yayasan WHERE status ='Aktif'";
            $query_tampil = mysqli_query($con, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                
        ?>
        <tr>       
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['n']; ?></td>
            <td><?php echo $data['nm_loker']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            
        </tr>
        <?php
            $no++;
            }
        
        ?>
    </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <main id="main">

    <!-- ======= About Section ======= -->
    <section id="features" class="features">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          <img src="images/posyandu.png" height="350px" width="350px;"/></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Untuk memulai menjadi donatur, Silahkan isi data registrasi dibawah ini</h3>
            <div class="form-group input-group" <label>Username  </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                     <input type="text" class="form-control" placeholder="Buat Username Maks. 5 Digit" name="txtusername" required autofocus/>
                 </div><br>
             <div class="form-group input-group"<label>Perusahaan / CV  </label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                     <input type="text" class="form-control" placeholder="Masukkan Nama Perusahaan" name="txtnama" required="">
                 </div><br>
                 <div class="form-group input-group"<label>Password</label>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                     <input type="password" class="form-control" placeholder="Masukkan Password (Maks. 8)" name="txtpassword" required="">
                 </div><br>
                 <div class="form-group input-group" <label>Email  </label>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                     <input type="text" class="form-control" placeholder="Email Perusahaan" name="txtemail"  required="">
                 </div><br>
                 <div class="form-group input-group"<label>Alamat  </label>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;
                     <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                     <textarea class="form-control" name="txtalamat"
                        oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required/>
                        </textarea>
                 </div><br>
                 <br><br>
                 <button type="submit" class="btn btn-warning btn-sm" name="btnDaftarPer" title="Masuk Sistem" >Registrasi</button>

          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<?php
 $con = mysqli_connect("localhost","root","","bkk"); 
//  include "koneksi.php";
 if (isset ($_POST['btnDaftarPer'])){
		$sql_simpan = "INSERT INTO user (username,nama,password,email,alamat,level,status) VALUES (
                    '".$_POST['txtusername']."',
                    '".$_POST['txtnama']."',
					'".$_POST['txtpassword']."',
                    '".$_POST['txtemail']."',
                    '".$_POST['txtalamat']."',
                    '".'Perusahaan / CV'."',
                    '".'Nonaktif'."');";
		$query_simpan = mysqli_query($con,$sql_simpan);

        if ($query_simpan) {
            echo "<script>alert('Tahap Selanjutnya')</script>";
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        }else{
            echo "<script>alert('Proses Gagal')</script>";
        }
        //selesai proses simpan
    }
?>
</body>
</html>