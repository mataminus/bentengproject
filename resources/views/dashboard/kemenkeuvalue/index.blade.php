@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    @foreach($kemenkeuvalues as $kemenkeuvalue)
      <h1>{{$kemenkeuvalue->title}}</h1>
      <img src="/image/organization/{{$kemenkeuvalue->photo}}" alt="" class="img-responsive" />
      <p>
        {!!$kemenkeuvalue->description!!}
      </p>
        <a href="/dashboard/nilai-kemenkeu/{{$kemenkeuvalue->id}}/edit">Edit</a>
    @endforeach

  </div>
</div>
@endsection
