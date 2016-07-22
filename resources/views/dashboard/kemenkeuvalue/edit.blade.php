@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>Posting Konten Nilai-Nilai Kementerian Keuangan</h1>

    <form class="" action="/dashboard/nilai-kemenkeu/{{$kemenkeuvalues->id}}" method="POST" enctype="multipart/form-data">
      <input type="text" name="title" value="{{$kemenkeuvalues->title}}">
      <input type="file" name="foto" value="{{$kemenkeuvalues->photo}}">
      <textarea name="description" id="summernote_1" >
        {{$kemenkeuvalues->description}}

      </textarea>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="edit">
    </form>
  </div>
</div>

@endsection
