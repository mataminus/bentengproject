@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>Posting Konten Nilai-Nilai Kementerian Keuangan</h1>

    <form class="" action="/dashboard/nilai-kemenkeu" method="POST" enctype="multipart/form-data">
      <input type="text" name="title" value="">
      <input type="file" name="foto" value="">
      <textarea name="description" id="summernote_1" >


      </textarea>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="POST">
    </form>
  </div>
</div>

@endsection
