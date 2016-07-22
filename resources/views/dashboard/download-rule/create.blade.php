@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Posting Link Download Peraturan</h3>
    <form class="" action="/dashboard/download-peraturan" method="post" enctype="multipart/form-data">
      <label for="">Nama Peraturan</label>
      <input type="text" name="name" value="">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="">
      <br>
      <label for="">Link Peraturan</label>
      <input type="text" name="link" value="">
      <br>
      <label for="">Kategori Peraturan</label>
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
