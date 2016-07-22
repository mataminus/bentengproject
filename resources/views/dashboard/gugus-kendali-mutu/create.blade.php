@extends('dashboard.index')

@section('content')
  <div class="page-content-wrapper">
    <div class="page-content">
      <h1 class="text-center">Memposting Gugus Kendali Mutu KPPN Benteng</h1>
      <form class="" action="/dashboard/gugus-kendali-mutu" method="post" enctype="multipart/form-data">
        <label for="">Tema GKM:</label>
        <input type="text" name="title" value="">
        <br>
        <label for="">Pelaksanaan GKM:</label>
        <input type="text" name="day" value="">
        <br>
        <label for="">Pembicara GKM:</label>
        <input type="text" name="speaker" value="">
        <br>
        <label for="">Dokumentasi GKM:</label>
        <input type="file" name="photo" value="">
        <br>
        <label for="">Deskripsi GKM:</label>
        <textarea name="description" id="summernote_1">

        </textarea>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="submit" value="post">
      </form>
    </div>
  </div>
@endsection
