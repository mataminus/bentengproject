@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Daftar Link Download Aplikasi</h1>
    <br>
    @foreach($downloadapps as $downloadapp)

    <img src="/image/organization/{{$downloadapp->cover}}" alt="" class="img-responsive" />
    <h5>Kategori: {{$downloadapp->category}}</h5>
    <p>
<b>Link</b>: <a href="{{$downloadapp->link}}" target="_blank">{{$downloadapp->name}}</a>
    </p>
    <p>
      {!!$downloadapp->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
