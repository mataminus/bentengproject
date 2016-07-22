@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Overview Layanan KPPN Benteng</h1>
    <br>
    @foreach($overviews as $overview)
    <h3>{{$overview->title}}</h3>
    <img src="/image/organization/{{$overview->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$overview->description!!}
    </p>
  
  @endforeach
  </div>
</div>
@endsection
