@extends('layouts.main')
@section('main')

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="assets/img/LOGO BEM FIKTI.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ ($title === "Home") ? 'active' : '' }}" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#TentangKami">Tentang Kami</a></li>
          <li><a class="nav-link scrollto {{ ($title === "News") ? 'active' : '' }}" href="/news">Berita Utama</a></li>
          <li><a class="nav-link scrollto " href="#FIBEROPTIK">FIBER OPTIK</a></li>
          <li><a class="nav-link scrollto" href="#Alumni">Alumni</a></li>
          <li><a href="#">Blog</a></li>
          <li><a class="nav-link scrollto" href="https://api.whatsapp.com/send/?phone=62895338431299&text&type=phone_number&app_absent=0">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  !-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <img src="assets/img/LOGO KABINET.png" style="margin-bottom: auto;" class="rounded-circle" alt="Cinque Terre" width="150" height="136">
          <h2 style="margin-top: 30px;">Selamat Datang di Website</h2>
          <h1>BEM FIKTI UG 2022/2023</h1>
          <h1>Kabinet Ruang Refleksi</h1>
          <h6 style="color: #fff; margin-top: 20px;">Sobat FIKTI memiliki pertanyaan terkait perkuliahan?</h6>
          <h6 style="color: #fff; margin-top: 10px;"><i>No More Worry</i>! Karena kami punya <b>HOTLINE FIKTI</b>!</h6>
          <a href="#about" class="btn-get-started scrollto"><b>HOTLINE FIKTI</b></a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="TentangKami" class="about">
      <div class="container text-center"  data-aos="fade-up">

        <div class="row no-gutters">
            <div class="content">
              <h3 style="color: #54337E;" href="#TentangKami">Tentang Kabinet Ruang Refleksi</h3>
              <p style="color: #54337E;">
                Kehadiran kabinet Ruang Refleksi diharapkan dapat membantu Mahasiswa FIKTI untuk merenungkan perilaku dan pilihan yang diambil, serta menjawab permasalahan yang ada secara lebih relevan.
                Dengan kehadiran kabinet Ruang Refleksi diharapkan Mahasiswa FIKTI dapat membangun kemampuan intelektual yang diperlukan untuk menjawab keadaan yang serba disruptif.
              </p>
              <p style="color: #54337E;">Kabinet Ruang Refleksi juga mempunyai makna dimana fungsionaris BEM FIKTI selalu mempunyai ruang untuk membuat kesalahan dan dapat berefleksi dengan cara selalu belajar dari kesalahan tersebut. Karena kabinet Ruang Refleksi percaya bahwasanya ruh utama BEM FIKTI terdapat pada kebebasan untuk belajar, kebebasan untuk berbuat kesalahan dan belajar dari kesalahan tersebut.</p>
              <a href="#about" style="color: #fff; background-color: #54337E;"class="btn">Mengenal Lebih Kabinet Ruang Refleksi</a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="about" class="about" style="background-color: #54337E;">
      <div class="container text-center" style="background-color: #54337E;" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="content">
              <h3 style="color: #fff;">Beritahu kami aspirasi, kritik, pendapat serta keresahanmu,
                untuk mendukung kemajuan FIKTI UG yang lebih baik lagi.</h3>
              <a href="#about" style="color: #001E42; background-color: #F3C35B;"class="btn"><b>KLIK DISNI</b></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" style="background-color: #fff;" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">

            </a>
          </li>

        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-3 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <h3 style="color: #54337E;">Company Profile </br>BEM FIKTI UG 2022/2023</h3>
                <iframe width="300" height="400" src="https://www.youtube.com/@BEMFIKTI">
                </iframe>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright" style="margin-top: 16px;">
          &copy; 2023 BEM FIKTI UG <strong><span> Biro Pengembangan Teknologi Informasi</span></strong>|Kabinet Ruang Refleksi
        </div>
      </div>
      <div class="social-links text-center">
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="line"><i class="bi bi-line"></i></a>
        <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection
