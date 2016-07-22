@extends('front.layouts.app')

@section('content')
<div class="container">
  @foreach($officers as $officer)
    <h1>{{$officer->title}}</h1>
    <img src="/image/organization/{{$officer->cover}}" alt="" />
    <p>
      {!! $officer->description!!}
    </p>
  @endforeach
</div>

@endsection
