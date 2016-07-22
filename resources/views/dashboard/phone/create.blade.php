@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
<div class="page-content">
  <form class="" action="/dashboard/nomor-penting" method="post">

    <label for="">Nama :</label>
    <input type="text" name="name" value="">
    <br>
    <label for=""> Nomor Telepon:</label>
    <input type="text" name="phone" value="">
    <br>
    <label for="">Email:</label>
    <input type="text" name="email" value="">
    <br>
    <label for="">Deskripsi</label>
    <textarea name="description" id="summernote_1">

    </textarea>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="submit" value="post">
  </form>
</div>
</div>
@endsection
