@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Daftar Link Download E-Book</h1>
    <br>
    @foreach($downloadinfos as $downloadinfo)

    <img src="/image/organization/{{$downloadinfo->cover}}" alt="" class="img-responsive" />
    <h5>Kategori: {{$downloadinfo->category}}</h5>
    <p>
<b>Link</b>: <a href="{{$downloadinfo->link}}" target="_blank">{{$downloadinfo->name}}</a>
    </p>
    <p>
      {!!$downloadinfo->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
