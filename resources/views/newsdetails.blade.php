@extends('layouts.main')
@section('main')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">

    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
          <!-- <div class="col-lg-8 entries"> -->
            <article class="entry entry-single">
              <div class="entry-img">
                <!-- <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid"> -->
              </div>
                <a href="blog-single.html">
              <h2 class="entry-title">
                {{ $news_details["title"] }}
              </h2>
                </a>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><a href="blog-single.html"><i class="bi bi-person"></i>Dibuat Oleh  {{ $berita["author"] }}</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                    {{ $berita["desc"] }}
                </p>
              </div>


            </article><!-- End blog entry -->



          </div><!-- End blog entries list -->



      </div>
    </section><!-- End Blog Single Section -->

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
