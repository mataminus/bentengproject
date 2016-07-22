@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Memposting Istilah KPPN</h1>
    <form class="" action="/dashboard/kamus-kppn" method="post" enctype="multipart/form-data">

      <label for="">Istilah:</label>
      <input type="text" name="name" value="">
      <br>
  
      <br>
      <label for="">Deskripsi:</label>
      <textarea name="description" id="summernote_1">

      </textarea>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="post">
    </form>
  </div>
</div>
@endsection
