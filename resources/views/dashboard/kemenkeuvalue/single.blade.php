@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>{{$kemenkeuvalues->title}}</h1>
    <img src="/image/organization/{{$kemenkeuvalues->photo}}" alt=""  class="center-block"/>
    <p class="bg-info">
      {!!$kemenkeuvalues->description!!}
    </p>
  </div>
</div>
@endsection
