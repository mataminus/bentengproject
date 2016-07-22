@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    <h3><a href="{{$downloadapps->link}}" target="_blank">{{$downloadapps->name}}</a></h3>
    <h5>Kategori: {{$downloadapps->category}}</h5>
    <img src="/image/organization/{{$downloadapps->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$downloadapps->description!!}
    </p>
  </div>
</div>
@endsection
