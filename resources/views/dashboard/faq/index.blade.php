@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">F.A.Q</h1>
    @foreach($faqs as $faq)
    <h3>  Pertanyaan : <a href="/dashboard/faq/{{$faq->id}}">"{{$faq->title}}"</a></h3>
    ilustrasi: <img src="/image/faq/{{$faq->cover}}" alt="" class="img-responsive center-block" />
    <p>
      Jawaban: {!! $faq->description !!}
    </p>
   <a href="/dashboard/faq/{{$faq->id}}/edit">Edit</a>

    @endforeach
  </div>
</div>

@endsection
