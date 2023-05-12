@extends('layouts.main')
@section('main')

    <div class="container">
      <div class="row align-items-start style-purple text-dark bg-white">
        <p class="text-dark bg-white" style="margin-top: 120px;"><h1 class="text-center" style="color: #54337E;"><b>Berita Terbaru</b></h1></p>
      </div>
    </div>
    <div class="row equal mx-2">
            @foreach ($berita as $daftar_berita )
    <div class="col-sm-4 d-flex pb-3 ">
      <div class="col">
        <div class="card h-100">
          <img src="assets/img/mailchimp-04X1Yp9hNH8-unsplash.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">
               <a href="/news/{{ $daftar_berita["slug"] }}"><b>{{ $daftar_berita["title"] }}</b></a> </h3>
             <h5>By: {{ $daftar_berita["author"] }}</h5>
            <p class="card-text">{{ $daftar_berita["desc"] }}</p>
            <a href="/newsdetails" class="w3-button w3-deep-purple">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
      </div>
      <footer id="footer">
        <div class="container d-md-flex py-4">
            <main id="main">

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
