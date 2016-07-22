@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Istilah Spesifik KPPN</h1>
    <h3><b>{{$kamuskppns->name}}</b></h3>
    <img src="/image/kamus-kppn/{{$kamuskppns->cover}}" alt="" class="img-circle img-responsive"/>
    <br>
    <p>
      {!!$kamuskppns->description!!}
    </p>
  </div>
</div>
@endsection
