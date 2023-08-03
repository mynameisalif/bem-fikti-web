@extends('layouts.main')
@section('main')

    <div class="container">
      <div class="row align-items-start style-purple text-dark bg-white">
        <p class="text-dark bg-white" style="margin-top: 120px;"><h1 class="text-center" style="color: #54337E;"><b>Kategori Berita</b></h1></p>
      </div>
    </div>
    <div class="row equal mx-2">
            @foreach ($categories as $category )
   <ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
   </ul>
    @endforeach
</div>
      </div>
@endsection
