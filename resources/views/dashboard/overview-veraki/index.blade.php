@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan overviewveraki Layanan KPPN Benteng</h1>
    <br>
    @foreach($overviewverakis as $overviewveraki)
    <h3>{{$overviewveraki->title}}</h3>
    <img src="/image/organization/{{$overviewveraki->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewveraki->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
