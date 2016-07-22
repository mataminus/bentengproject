@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Edit Download E-book Layanan KPPN Benteng</h3>
    <form class="" action="/dashboard/download-buku-saku/{{$downloadbooks->id}}" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="{{$downloadbooks->title}}">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="{{$downloadbooks->cover}}">
      <br>
      <label for="">Link Buku Saku</label>
      <input type="text" name="url" value="{{$downloadbooks->link}}">
      <br>
      <label for="">Kategori Buku Saku</label>
      <input type="text" name="category" value="{{$downloadbooks->category}}">
      <br>
      <textarea name="description" id="summernote_1">
        {{$downloadbooks->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="name" value="edit">
    </form>
  </div>
</div>
@endsection
