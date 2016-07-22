@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    <h3>{{$overviewbanks->title}}</h3>
    <img src="/image/organization/{{$overviewbanks->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewbanks->description!!}
    </p>
  </div>
</div>
@endsection
