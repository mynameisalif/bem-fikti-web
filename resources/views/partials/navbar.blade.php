<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center" >
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="/assets/img/LOGO BEM FIKTI.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto {{ Request::is('/') ? 'active':'' }} " href="/#hero">Beranda</a></li>
            <li><a class="nav-link scrollto" href="/#TentangKami">Tentang Kami</a></li>
            <li><a class="nav-link scrollto {{ Request::is('news') ? 'active':'' }}" href="/news">Berita Utama</a></li>
            {{-- <li><a class="nav-link scrollto " href="#FIBEROPTIK">FIBER OPTIK</a></li>
            <li><a class="nav-link scrollto" href="#Alumni">Alumni</a></li>
            <li><a href="#">Blog</a></li> --}}
            <li><a class="nav-link scrollto" href="https://api.whatsapp.com/send/?phone=62895338431299&text&type=phone_number&app_absent=0">Kontak</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      <!-- .navbar -->

    </div>
  </header>
