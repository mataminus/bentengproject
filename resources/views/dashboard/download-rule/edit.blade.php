@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Edit Download Peraturan Layanan KPPN Benteng</h3>
    <form class="" action="/dashboard/download-peraturan/{{$downloadrules->id}}" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="{{$downloadrules->title}}">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="{{$downloadrules->cover}}">
      <br>
      <label for="">Link Peraturan</label>
      <input type="text" name="url" value="{{$downloadrules->link}}">
      <br>
      <label for="">Kategori Peraturan</label>
      <input type="text" name="category" value="{{$downloadrules->category}}">
      <br>
      <textarea name="description" id="summernote_1">
        {{$downloadrules->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="name" value="edit">
    </form>
  </div>
</div>
@endsection
