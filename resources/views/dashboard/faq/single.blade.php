@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">


    <label for="">Pertanyaan:</label> {{$faqs->title}}
    <br>
  <label for="">  Ilustrasi:</label> <img src="/image/faq/{{$faqs->cover}}" alt="" class="img-responsive ">
  <br>
<label for="">Jawaban: </label>
{!!$faqs->description!!}

  </div>
</div>
@endsection
