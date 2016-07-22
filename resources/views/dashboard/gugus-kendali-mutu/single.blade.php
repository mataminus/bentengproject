@extends('dashboard.index')

@section('content')
  <div class="page-content-wrapper">
    <div class="page-content">
      <h1 class="text-center">Menampilkan Gugus Kendali Mutu KPPN Benteng</h1>
      <h3>{{$guguskendalimutus->title}}</h3>
      <p>
        {{$guguskendalimutus->speaker}} | {{$guguskendalimutus->day}}
      </p>
      <br>
      <div class="col-md-6">
          <img src="/image/gkm/{{$guguskendalimutus->cover}}" alt="" class="img-responsive img-rounded" />
      </div>
      <p>
        {!!$guguskendalimutus->description!!}
      </p>
    </div>
  </div>
@endsection
