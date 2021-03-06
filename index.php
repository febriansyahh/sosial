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
</head>

<style>
  [data-component="slideshow"] .slide {
    display: none;
    text-align: center;
  }

  [data-component="slideshow"] .slide.active {
    display: block;
  }
</style>

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
          <li><a class="nav-link scrollto" href="loginPer.php">Ajukan Donasi</a></li>

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
              <a href="perseorangan.php" class="btn-get-started scrollto">Ajukan Donasi</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="images/donasi.jpg" class="img-fluid animated" alt="">
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
                    <div id="slideshow-example" data-component="slideshow">
                      <div role="list">
                        <?php
                          include_once("koneksi.php");
                          $sql_tampil = "SELECT gambar FROM program";
                          $query_tampil = mysqli_query($con, $sql_tampil);
                          while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
                            $photoDir = 'files/' . $data['gambar'];
                            ?>
                              <div class="slide">
                                <img src="<?php echo $photoDir ?>" width="860" height="350" alt="">
                                <div class="card">
                                  <h4>Adalah Saya</h4>
                                </div>
                              </div>
                            <?php
                          }
                        ?>
                      </div>
                    </div>
                    <br>
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
        <div class="container">

          <div class="row content">
            <div class="col-md-4" data-aos="fade-right">
              <img src="assets/img/details-1.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-4" data-aos="fade-up">
              <h3>Syarat & Ketentuan </h3>
              <p>Donasi Individu</p>
              <ul>
                <li><i class="fa fa-check"></i> KTP</li>
                <li><i class="fa fa-check"></i> NPWP (Bila ada)</li>
                <li><i class="fa fa-check"></i> Nomor Rekening Penerima</li>
                <li><i class="fa fa-check"></i> Akte Kelahiran / Kartu Keluarga (apabila penerima manfaat adalah anak)</li>
                <li><i class="fa fa-check"></i> Rekam Medis (dibutuhkan apabila penggalangan dana kesehatan)</li>
                <li><i class="fa fa-check"></i> Nomor Telepon selular aktif</li>
                <li><i class="fa fa-check"></i> Foto diri sambil memegang KTP</li>
              </ul>
            </div>
          </div>

          <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
              <img src="assets/img/details-2.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
              <h3>Syarat & Ketentuan </h3>
              <p>Donasi Yayasan Badan Hukum</p>
              <ul>
                <li><i class="fa fa-check"></i> Akta Pendirian Organisasi</li>
                <li><i class="fa fa-check"></i> SK Kemenkumham</li>
                <li><i class="fa fa-check"></i> NPWP Badan</li>
                <li><i class="fa fa-check"></i> KTP Penanggung Jawab</li>
                <li><i class="fa fa-check"></i> Nomor Rekening atas nama badan</li>
                <li><i class="fa fa-check"></i> Tanda Daftar Yayasan</li>
                <li><i class="fa fa-check"></i> Surat Keterangan Domisili</li>
                <li><i class="fa fa-check"></i> Struktur Organisasi</li>
                <li><i class="fa fa-check"></i> Izin Khusus (Bila Ada)</li>
                <li><i class="fa fa-check"></i> Foto diri penanggung jawab dengan memegang KTP</li>
                <li><i class="fa fa-check"></i> Surat Kuasa (apabila penanggung jawab bukan ketua Yayasan)</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

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
</body>

<script type="text/javascript">
  var slideshows = document.querySelectorAll('[data-component="slideshow"]');
  slideshows.forEach(initSlideShow);

  function initSlideShow(slideshow) {

    var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);

    var index = 0,
      time = 5000;
    slides[index].classList.add('active');

    setInterval(() => {
      slides[index].classList.remove('active');

      index++;
      if (index === slides.length) index = 0;

      slides[index].classList.add('active');

    }, time);
  }
</script>

</html>