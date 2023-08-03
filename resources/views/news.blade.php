@extends('layouts.main')
@section('main')

    <div class="container">
      <div class="row align-items-start style-purple text-dark bg-white">
        <p class="text-dark bg-white" style="margin-top: 120px;"><h1 class="text-center" style="color: #54337E;"><b>{{ $title }}</b></h1></p>
      </div>
    </div>
    <div class="row equal mx-2">
            @foreach ( $news as $berita  )
    <div class="col-sm-4 d-flex pb-3 ">
      <div class="col">
        <div class="card h-100">
            @if ($berita->image)
            <img src="{{ asset('storage/'.$berita->image) }}" alt="{{ $berita->category->name }}" class="img-fluid">
        @else
            <img src="https://source.unsplash.com/100x40?{{ $berita->category->name }}" alt="{{ $berita->category->name }}" class="img-fluid">
        @endif
          <div class="card-body">
            <h3 class="card-title">
               <a href="/news/{{$berita->slug }}"><b>{{ $berita->title }}</b></a> </h3>
               <p>{{ $berita->created_at->diffForHumans() }}</p>
          <a href="/authors/{{ $berita->author->username }}"><h5>By: {{ $berita->author->name }}</h5></a>
            <p class="card-text">{{ $berita->excerpt }}</p>
            <a href="/news/{{$berita->slug }}" class="w3-button w3-deep-purple">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
      </div>
@endsection
