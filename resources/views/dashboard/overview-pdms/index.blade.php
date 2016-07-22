@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan overviewpdms Layanan KPPN Benteng</h1>
    <br>
    @foreach($overviewpdms as $overviewpdms)
    <h3>{{$overviewpdms->title}}</h3>
    <img src="/image/organization/{{$overviewpdms->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overviewpdms->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
