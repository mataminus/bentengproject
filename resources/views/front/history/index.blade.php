@extends('front.layouts.app')

@section('content')

@foreach($histories as $history)
    <div class="container">
        <h1 class="text-center">{{$history->title}}</h1>
      <br>
      <img src="/image/organization/{{$history->cover}}" alt="" class="img-responsive center-block" />
      <br>
      <p>
        {!!$history->description!!}
      </p>
    </div>
@endforeach
@endsection
