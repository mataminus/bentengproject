@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Layanan Bank KPPN Benteng</h1>
    <br>
    @foreach($overviewbanks as $overviewbank)
    <h3>{{$overviewbank->title}}</h3>
    <img src="/image/organization/{{$overviewbank->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewbank->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
