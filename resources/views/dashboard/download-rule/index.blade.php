@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Daftar Link Download Peraturan</h1>
    <br>
    @foreach($downloadrules as $downloadrule)

    <img src="/image/cover-download/{{$downloadrule->cover}}" alt="" class="img-responsive" />
    <h5>Kategori: {{$downloadrule->category}}</h5>
    <p>
<b>Link</b>: <a href="{{$downloadrule->link}}" target="_blank">{{$downloadrule->name}}</a>
    </p>
    <p>
      {!!$downloadrule->description!!}
    </p>

  @endforeach
  </div>
</div>
@endsection
