@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    <h3><a href="{{$downloadbooks->link}}" target="_blank">{{$downloadbooks->name}}</a></h3>
    <h5>Kategori: {{$downloadbooks->category}}</h5>
    <img src="/image/organization/{{$downloadbooks->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$downloadbooks->description!!}
    </p>
  </div>
</div>
@endsection
