@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Kuis KPPN</h1>

    <form class="" action="/dashboard/kuis-kppn" method="post">
        <label for="">Kuis:</label>
        <input type="text" name="kuis" value="">
        <br>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="submit" value="post">
    </form>

  </div>
</div>
@endsection
