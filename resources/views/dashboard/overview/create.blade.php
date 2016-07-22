@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Posting Konten Overview Layanan KPPN Benteng</h3>
    <form class="" action="/dashboard/layanan" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="">
      <br>
      <textarea name="description" id="summernote_1">

      </textarea>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="name" value="post">
    </form>
  </div>
</div>
@endsection
