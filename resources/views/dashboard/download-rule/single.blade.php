@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Pengumuman</h1>
    <br>
    <h3><a href="{{$downloadrules->link}}" target="_blank">{{$downloadrules->name}}</a></h3>
    <h5>Kategori: {{$downloadrules->category}}</h5>
    <img src="/image/organization/{{$downloadrules->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$downloadrules->description!!}
    </p>
  </div>
</div>
@endsection
