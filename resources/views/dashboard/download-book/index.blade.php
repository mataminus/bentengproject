@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Daftar Link Download E-Book</h1>
    <br>
    @foreach($downloadbooks as $downloadbook)

    <img src="/image/organization/{{$downloadbook->cover}}" alt="" class="img-responsive" />
    <h5>Kategori: {{$downloadbook->category}}</h5>
    <p>
<b>Link</b>: <a href="{{$downloadbook->link}}" target="_blank">{{$downloadbook->name}}</a>
    </p>
    <p>
      {!!$downloadbook->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
