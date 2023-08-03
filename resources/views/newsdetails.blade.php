@extends('layouts.main')
@section('main')
  <main id="main">
    <!-- ======= Blog Single Section ======= -->
    <section class="breadcrumbs">

    </section>
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
          <!-- <div class="col-lg-8 entries"> -->
            <article class="entry entry-single">
              <div class="entry-img">
                <!-- <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid"> -->
              </div>
              <h2 class="entry-title">
                {{ $berita->title }}
              </h2>
              <div class="entry-meta">

                <p> <a href="/categories/{{ $berita->category->slug }}">{{ $berita->category->name }}</a> </p>
                <ul>
                  <li class="d-flex align-items-center"><a href="/authors/{{ $berita->author->username }}"><i class="bi bi-person"></i>Dibuat Oleh  {{ $berita->author->name }}</a></li>
                </ul>
                <p>{{ $berita->created_at->diffForHumans() }}</p>
              </div>

              <div class="entry-content">
                {!! $berita->body !!}
              </div>


            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection
