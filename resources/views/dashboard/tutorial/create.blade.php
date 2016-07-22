@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>Daftar Video</h1>
    <form class="" action="/dashboard/tutorial" method="post">
      <label for="">Judul Video</label>
      <input type="text" name="title" value="">
      <br>
      <label for="">Masukkan Link dari Youtube</label>
      <br>
      https://www.youtube.com/embed/<input type="text" name="embed" value="">
      <br>
      <label for="">Deskripsi Video...</label>
      <textarea name="description" rows="8" cols="40">


      </textarea>
      <br>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="post">
    </form>
  </div>
</div>
@endsection
