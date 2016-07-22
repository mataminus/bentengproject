@extends('front.layouts.app')

@section('content')

  <div class="container">
    <h1 class="text-center text-info">Arsip Artikel</h1>
    @foreach($blogs as $blog)

      <h3>{{$blog->title}}</h3>
      <p>
        Oleh: {{$blog->author}}
      </p>


      <p>
        <a href="/blog/{{$blog->slug}}">selengkapnya...</a>
      </p>
    @endforeach
    {{$blogs->links()}}
  </div>

@endsection
