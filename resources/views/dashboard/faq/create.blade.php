@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h3>Catat Faq</h3>
    <form class="" action="/dashboard/faq" method="post" enctype="multipart/form-data">
      <label for="">Pertanyaan: </label>
      <input type="text" name="title" value="">
      <br>
      <label for="">Ilustrasi:</label>
      <input type="file" name="photo" value="">
      <br>
      <label for="">Jawaban:</label>
      <br>
      <textarea name="description" id="summernote_1">

      </textarea>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="post">
    </form>
  </div>
</div>

@endsection
