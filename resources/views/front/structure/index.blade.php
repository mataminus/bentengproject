@extends('front.layouts.app')

@section('content')

<div class="container">
  @foreach($structures as $structure)
    <h1 class="text-center">{{$structure->title}}</h1>
    <br>
    <img src="/image/organization/{{$structure->cover}}" alt="" class="img-responsive center-block" />
    <p>
      {!!$structure->description!!}
    </p>
  @endforeach
</div>
@endsection
