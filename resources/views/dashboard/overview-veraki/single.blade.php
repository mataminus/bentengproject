@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Layanan Overview Veraki</h1>
    <br>
    <h3>{{$overviewverakis->title}}</h3>
    <img src="/image/organization/{{$overviewverakis->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewverakis->description!!}
    </p>
  </div>
</div>
@endsection
