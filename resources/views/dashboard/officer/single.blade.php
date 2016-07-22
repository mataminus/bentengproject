@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Nama Pegawai</h1>
    <br>

    <h3>{{$officers->name}}</h3>
    <p>
      {{$officers->job}}
    </p>
    <p>
      Motto: {{$officers->motto}}
    </p>
    <p>
      E-mail: {{$officers->email}}
    </p>
    <img src="/image/officer/{{$officers->cover}}" alt="" class="img-responsive" />
    <p>
      {!!$officers->description!!}
    </p>

  </div>
</div>
@endsection
