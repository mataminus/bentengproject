@extends('front.layouts.app')

@section('content')
<div class="container">

  @foreach($visionmissions as $visionmission)
    <h1 class="text-center">{{$visionmission->title}}</h1>
    <br>
    <img src="/image/organization/{{$visionmission->cover}}" alt="" class="img-responsive center-block" />
    <p>
      {!!$visionmission->description!!}
    </p>
  @endforeach
</div>

@endsection
