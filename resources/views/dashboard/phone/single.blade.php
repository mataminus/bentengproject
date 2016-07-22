@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
<div class="page-content">

  <ul>
    <li>Nama: {{$importantnumbers->name}}</li>
    <li>Nomor Telepon: {{$importantnumbers->phone}}</li>
    <li>Email: {{$importantnumbers->email}}</li>
  </ul>
  <p>
    {!!$importantnumbers->description!!}
  </p>
</div>
</div>
@endsection
