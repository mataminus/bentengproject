@extends('dashboard.index')

@section('content')
  <div class="page-content-wrapper">
    <div class="page-content">
      <h1 class="text-center">Menampilkan Gugus Kendali Mutu KPPN Benteng</h1>
      @foreach($guguskendalimutus as $guguskendalimutu)
        <h3><a href="/dashboard/gugus-kendali-mutu/{{$guguskendalimutu->id}}">{{$guguskendalimutu->title}}</a></h3>
        <p>
          {{$guguskendalimutu->speaker}} | {{$guguskendalimutu->day}}
        </p>
        <br>
      <div class="col-md-4">
          <img src="/image/gkm/{{$guguskendalimutu->cover}}" alt="" class="img-responsive img-rounded" />
      </div>
        <p>
          {!!$guguskendalimutu->description!!}
        </p>
        <a href="/dashboard/gugus-kendali-mutu/{{$guguskendalimutu->id}}/edit">Edit</a>
      @endforeach
    </div>
  </div>
@endsection
