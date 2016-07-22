@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center"><a href="/dashboard/alumni">Menampilkan Nama Pegawai</a></h1>
    <br>

    <h3>{{$alumnaes->name}}</h3>
    <p>
      {{$alumnaes->job}}
    </p>
    <p>
    Masa Kerja: {{$alumnaes->period}}
    </p>

    <img src="/image/alumnae/{{$alumnaes->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$alumnaes->description!!}
    </p>

  </div>
</div>
@endsection
