@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Posting Konten Visi Misi</h3>
    <form class="" action="/dashboard/alumni/{{$alumnaes->id}}" method="post" enctype="multipart/form-data">
      <label for="">Nama</label>
      <input type="text" name="name" value="">
      <br>
      <label for="">Job</label>
      <input type="text" name="job" value="">
      <br>
      <label for="">Foto</label>
      <input type="file" name="photo" value="">
      <br>
      <label for="">Masa Kerja</label>
      <input type="text" name="period" value="">
      <br>

      <textarea name="description" id="summernote_1">

      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="edit">
    </form>
  </div>
</div>
@endsection
