@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Tampilkan Menu Sejarah</h1>
    @foreach($histories as $history)
      <h3 class="text-center">{{$history->title}}</h3>
      <img src="/image/organization/{{$history->cover}}" alt="" class="img-responsive center-block"/>
      <p>
        {!!$history->description!!}
      </p>
          <a href="/dashboard/sejarah/{{$history->id}}/edit">edit</a>
    @endforeach

  </div>
</div>
@endsection
