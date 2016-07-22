@extends('front.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      @foreach($tutorials as $tutorial)
      <h3 class="">{{$tutorial->title}}</h3>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/{{$tutorial->embed}}" class="embed-responsive-item">




      </iframe>
    </div>
        <h5>Deskripsi:</h5>
      <p>
        {{$tutorial->description}}
      </p>
    @endforeach
    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <a class="text-danger">
        Perhatian!!!: Layanan ini dapat dinikmati jika jaringan internet Anda mengizinkan akses ke Youtube.
      </a>
    </div>
  </div>
</div>

@endsection
