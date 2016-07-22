@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    <h3>{{$overviews->title}}</h3>
    <img src="/image/organization/{{$overviews->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviews->description!!}
    </p>
  </div>
</div>
@endsection
