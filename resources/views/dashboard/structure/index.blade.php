@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Struktur Organisasi</h1>
    <br>
    @foreach($structures as $structure)
    <h3>{{$structure->title}}</h3>
    <img src="/image/organization/{{$structure->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$structure->description!!}
    </p>
  @endforeach
  </div>
</div>
@endsection
