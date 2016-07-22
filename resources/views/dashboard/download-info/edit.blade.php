@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Edit Download Pengumuman Layanan KPPN Benteng</h3>
    <form class="" action="/dashboard/download-pengumuman/{{$downloadinfos->id}}" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="{{$downloadinfos->title}}">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="{{$downloadinfos->cover}}">
      <br>
      <label for="">Link Pengumuman</label>
      <input type="text" name="url" value="{{$downloadinfos->link}}">
      <br>
      <label for="">Kategori Pengumuman</label>
      <input type="text" name="category" value="{{$downloadinfos->category}}">
      <br>
      <textarea name="description" id="summernote_1">
        {{$downloadinfos->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="name" value="edit">
    </form>
  </div>
</div>
@endsection
