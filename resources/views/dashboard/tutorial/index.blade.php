@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1>Daftar Video </h1>
    <hr>
    @foreach($tutorials as $tutorial)
    <h3>{{$tutorial->title}}</h3>
    <p>
      Dipost pada: {{date('d F Y',strtotime($tutorial->created_at))}}
    </p>
    <br>
  <div class="row">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-4by3">
        <iframe src="https://www.youtube.com/embed/{{$tutorial->embed}}" class="embed-responsive-item"></iframe>
            </div>
      </div>
  </div>
    <label for="">Deskripsi</label>
    <p>
      {{$tutorial->description}}
    </p>
    <div style="background:rgb(127, 205, 249);height:5px;width:200px"></div>
  @endforeach

  </div>
</div>

@endsection
