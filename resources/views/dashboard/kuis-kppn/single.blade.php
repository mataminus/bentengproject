@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Kuis KPPN</h1>
    {{$quizzes->kuis}}

  </div>
</div>
@endsection
