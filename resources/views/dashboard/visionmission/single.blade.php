@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    <h3>{{$visionmissions->title}}</h3>
    <img src="/image/organization/{{$visionmissions->cover}}" alt="" class="img-responsive" />
    <p>
      {{$visionmissions->description}}
    </p>
  </div>
</div>
@endsection
