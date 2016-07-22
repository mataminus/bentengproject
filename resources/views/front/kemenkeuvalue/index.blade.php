@extends('front.layouts.app')

@section('content')

<div class="container">
@foreach ($kemenkeuvalues as $kemenkeuvalue)

<h1 class="text-center">{{$kemenkeuvalue->title}}</h1>
<br>
<img src="/image/organization/{{$kemenkeuvalue->photo}}" alt="" class="img-responsive center-block" />
<br>
<p class= "text-justify">
  {!!$kemenkeuvalue->description!!}
</p>

@endforeach
</div>
@endsection
