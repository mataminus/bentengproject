@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
<div class="page-content">
  <form class="" action="/dashboard/nomor-penting/{{$importantnumbers->id}}" method="post">

    <label for="">Nama :</label>
    <input type="text" name="name" value="{{$importantnumbers->name}}">
    <br>
    <label for=""> Nomor Telepon:</label>
    <input type="text" name="phone" value="{{$importantnumbers->phone}}">
    <br>
    <label for="">Email:</label>
    <input type="text" name="email" value="{{$importantnumbers->email}}">
    <br>
    <label for="">Deskripsi</label>
    <textarea name="description" id="summernote_1">
      {{$importantnumbers->description}}
    </textarea>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="submit" value="post">
  </form>
</div>
</div>
@endsection
