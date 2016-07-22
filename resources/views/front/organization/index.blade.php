@extends('front.layouts.app')

@section('content')

<div class="container">
  @foreach($organizations as $organization)
    <h1 class="text-center">{{$organization->title}}</h1>
    <br>
    <img src="/image/organization/{{$organization->cover}}" alt="" class="center-block"/>
    <br>
    {{$organization->description}}
    <br>
    <br>
  <div class="row">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-4by3">
        <iframe src="https://www.youtube.com/embed/{{$organization->embed}}" class="embed-responsive-item" class="center-block"></iframe>
        </div>
      </div>
  </div>
  <p>
    Perhatian!! Video ini dapat disaksikan jika jaringan internet Anda mengizinkan akses ke <i>Youtube</i>.
  </p>
  @endforeach
</div>
@endsection
