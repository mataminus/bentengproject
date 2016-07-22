@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>Posting Konten Sejarah KPPN</h1>
    <form class="" action="/dashboard/sejarah/{{$histories->id}}" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="{{$histories->title}}">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="{{$histories->cover}}">
      <br>
      <textarea name="description" id="summernote_1">
        {{$histories->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="edit">
    </form>
  </div>
</div>
@endsection
