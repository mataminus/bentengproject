@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Kuis KPPN</h1>

      <ol>
        @foreach($quizzes as $quiz)
        <li>{{$quiz->kuis}}</li>
        @endforeach
      </ol>

  </div>
</div>
@endsection
