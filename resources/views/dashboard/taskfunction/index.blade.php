@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Tugas dan Fungsi Organisasi</h1>
    <br>
    @foreach($taskfunctions as $taskfunction)
    <h3>{{$taskfunction->title}}</h3>
    <img src="/image/organization/{{$taskfunction->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$taskfunction->description!!}
    </p>
  @endforeach
  </div>
</div>
@endsection
