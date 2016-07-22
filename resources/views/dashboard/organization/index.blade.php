@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">

    <div class="col-md-12">
      @foreach($organizations as $organization)
        <h1 class="text-center">{{$organization->title}}</h1>

        <img src="/image/organization/{{$organization->cover}}" alt="" class="center-block" />

        <br>
        <p class="text-center">
      {{$organization->description}}
        </p>
        <hr>
        <h1 class="text-center">Video Profil KPPN Benteng</h1>
      <div class="row ">
        <div class="col-md-6 ">
        <div class="center-block">
            <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://www.youtube.com/embed/{{$organization->embed}}" class="embed-responsive-item" class="center-block"></iframe>
          </div>
        </div>
        </div>
      </div>
        <p>
          Perhatian!! Video ini dapat disaksikan jika jaringan internet Anda mengizinkan akses ke <i>Youtube</i>.
        </p>
      @endforeach
    </div>

  </div>
</div>
@endsection
