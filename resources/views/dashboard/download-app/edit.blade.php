@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Edit downloadapp Layanan KPPN Benteng</h3>
    <form class="" action="/dashboard/download-aplikasi/{{$downloadapps->id}}" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="{{$downloadapps->title}}">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="{{$downloadapps->cover}}">
      <br>
      <label for="">Link Aplikasi</label>
      <input type="text" name="url" value="{{$downloadapps->link}}">
      <br>
      <label for="">Kategori Aplikasi</label>
      <input type="text" name="category" value="{{$downloadapps->category}}">
      <br>
      <textarea name="description" id="summernote_1">
        {{$downloadapps->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="name" value="edit">
    </form>
  </div>
</div>
@endsection
