@extends('front.layouts.app')

@section('content')

<div class="container">
  @foreach($taskfunctions as $taskfunction)
  <h1 class="text-center">{{$taskfunction->title}}</h1>
  <br>
  <img src="/image/organization/{{$taskfunction->cover}}" alt="" />
  <br>
  <p>
    {!!$taskfunction->description!!}
  </p>
  @endforeach
</div>

@endsection
