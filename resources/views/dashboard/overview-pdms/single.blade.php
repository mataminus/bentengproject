@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    <h3>{{$overviewpdms->title}}</h3>
    <img src="/image/organization/{{$overviewpdms->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewpdms->description!!}
    </p>
  </div>
</div>
@endsection
