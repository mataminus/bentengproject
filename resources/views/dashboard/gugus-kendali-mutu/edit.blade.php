@extends('dashboard.index')

@section('content')
  <div class="page-content-wrapper">
    <div class="page-content">
      <h1 class="text-center">Mengedit Gugus Kendali Mutu KPPN Benteng</h1>
      <form class="" action="/dashboard/gugus-kendali-mutu/{{$guguskendalimutus->id}}" method="post" enctype="multipart/form-data">
        <label for="">Tema GKM:</label>
        <input type="text" name="title" value="{{$guguskendalimutus->title}}">
        <br>
        <label for="">Pelaksanaan GKM:</label>
        <input type="text" name="day" value="{{$guguskendalimutus->day}}">
        <br>
        <label for="">Pembicara GKM:</label>
        <input type="text" name="speaker" value="{{$guguskendalimutus->speaker}}">
        <br>
        <label for="">Dokumentasi GKM:</label>
        <input type="file" name="photo" value="{{$guguskendalimutus->cover}}">
        <br>
        <label for="">Deskripsi GKM:</label>
        <textarea name="description" id="summernote_1">
          {{$guguskendalimutus->description}}
        </textarea>
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" name="edit" value="edit">
      </form>
    </div>
  </div>
@endsection
