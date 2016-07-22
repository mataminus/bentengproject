@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Mengedit Istilah KPPN</h1>
    <form class="" action="/dashboard/kamus-kppn/{{$kamuskppns->id}}" method="post" enctype="multipart/form-data">

      <label for="">Istilah:</label>
      <input type="text" name="name" value="{{$kamuskppns->name}}">
      <br>
  
      <br>
      <label for="">Deskripsi:</label>
      <textarea name="description" id="summernote_1">
        {{$kamuskppns->description}}
      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="edit" value="edit">
    </form>
  </div>
</div>
@endsection
