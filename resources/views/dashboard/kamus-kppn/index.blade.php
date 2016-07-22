@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Menampilkan Daftar Istilah KPPN</h1>
    @foreach($kamuskppns as $kamuskppn)
      <h3><b>{{$kamuskppn->name}}</b></h3>
    
      <br>
      <p>
        {!!$kamuskppn->description!!}
      </p>
    @endforeach

    {{$kamuskppns->links()}}
  </div>
</div>
@endsection
