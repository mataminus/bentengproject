@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Visi Misi Organisasi</h1>
    <br>
    @foreach($visionmissions as $visionmission)
    <h3>{{$visionmission->title}}</h3>
    <img src="/image/organization/{{$visionmission->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$visionmission->description!!}
    </p>
  @endforeach
  </div>
</div>
@endsection
