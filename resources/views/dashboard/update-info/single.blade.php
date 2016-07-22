@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center">Daftar Update</h1>
    <ol>
      <li>{{$notifications->update1}}</li>
      <li>{{$notifications->update2}}</li>
      <li>{{$notifications->update3}}</li>
    </ol>
  </div>
</div>
@endsection
