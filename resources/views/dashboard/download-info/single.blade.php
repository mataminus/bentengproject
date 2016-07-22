@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Pengumuman</h1>
    <br>
    <h3><a href="{{$downloadinfos->link}}" target="_blank">{{$downloadinfos->name}}</a></h3>
    <h5>Kategori: {{$downloadinfos->category}}</h5>
    <img src="/image/organization/{{$downloadinfos->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$downloadinfos->description!!}
    </p>
  </div>
</div>
@endsection
