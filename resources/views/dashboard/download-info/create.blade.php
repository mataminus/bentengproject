@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Posting Link Download Pengumuman</h3>
    <form class="" action="/dashboard/download-pengumuman" method="post" enctype="multipart/form-data">
      <label for="">Nama Pengumuman</label>
      <input type="text" name="name" value="">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="">
      <br>
      <label for="">Link Pengumuman</label>
      <input type="text" name="link" value="">
      <br>
      <label for="">Kategori Pengumuman</label>
      <input type="text" name="category" value="">
      <br>
      <textarea name="description" id="summernote_1">

      </textarea>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="post">
    </form>
  </div>
</div>
@endsection
