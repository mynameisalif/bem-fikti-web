@extends('dashboard.layouts.main')
@section('container')
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <!-- <div class="col-lg-8 entries"> -->
          <article class="entry entry-single">
            <div class="entry-img">
              <!-- <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid"> -->
            </div>
            <h2 class="entry-title">
              {{ $news->title }}
            </h2>
            <a href="/dashboard/news" class="btn btn-success"> <span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/news/{{ $news->id }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/news/{{ $news->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Hapus</button>
                </form>
            <div class="entry-meta">
            @if ($news->image)
                <div style="max-height:500px;overflow: hidden;">
                <img src="{{ asset('storage/'.$news->image) }}" alt="{{ $news->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $news->category->name }}" alt="{{ $news->category->name }}">
            @endif
              <h4> <a href="/categories/{{ $news->category->slug }}" style="text-decoration: none;font-size: 36px;color:black">{{ $news->category->name }}</a> </h4>
              <h4> <a href="/authors/{{ $news->author->username }}" style="text-decoration: none;font-size: 24px;color:black"><i class="bi bi-person"></i>Dibuat Oleh  {{ $news->author->name }}</a></h4>
              <p>{{ $news->created_at->diffForHumans() }}</p>
            </div>

            <div class="entry-content">
              {!! $news->body !!}
            </div>


          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

    </div>
  </section>
@endsection
