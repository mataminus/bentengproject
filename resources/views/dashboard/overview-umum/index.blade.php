@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan overviewumum Layanan KPPN Benteng</h1>
    <br>
    @foreach($overviewumums as $overviewumum)
    <h3>{{$overviewumum->title}}</h3>
    <img src="/image/organization/{{$overviewumum->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewumum->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
