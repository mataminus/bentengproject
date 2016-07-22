@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>Posting Konten Organisasi</h1>
    <br>
    <form class="" action="/dashboard/organisasi" method="POST" enctype="multipart/form-data">
      <input type="text" name="title" value="">
      <input type="file" name="photo" value="">

       <textarea name="description" id="summernote_1">

       </textarea>
      <label for="">https://www.youtube.com/embed/</label>
      <input type="text" name="embed" value="">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="submit" name="submit" value="post">

    </form>
  </div>
</div>

@endsection
