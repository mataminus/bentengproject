@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
  <div class="page-content">
    <h3 class="text-center">Edit Overviewbank Layanan KPPN Benteng</h3>
    <form class="" action="/dashboard/layanan-bank/{{$overviewbanks->id}}" method="post" enctype="multipart/form-data">
      <label for="">Judul</label>
      <input type="text" name="title" value="{{$overviewbanks->title}}">
      <br>
      <label for="">Cover Foto</label>
      <input type="file" name="photo" value="{{$overviewbanks->cover}}">
      <br>
      <textarea name="description" id="summernote_1">
        {{$overviewbanks->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="name" value="edit">
    </form>
  </div>
</div>
@endsection
