@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h3>Catat Faq</h3>
    <form class="" action="/dashboard/faq/{{$faqs->id}}" method="post" enctype="multipart/form-data">
      <label for="">Pertanyaan: </label>
      <input type="text" name="title" value="{{$faqs->title}}">
      <br>
      <label for="">Ilustrasi:</label>
      <input type="file" name="photo" value="{{$faqs->cover}}">
      <br>
      <label for="">Jawaban:</label>
      <br>
      <textarea name="description" id="summernote_1">
        {{$faqs->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="edit" value="edit">
    </form>
  </div>
</div>

@endsection
