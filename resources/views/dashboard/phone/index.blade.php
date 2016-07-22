@extends('dashboard.index')

@section('content')
<div class="page-content-wrapper">
<div class="page-content">
  <h1>Daftar Kontak Penting</h1>
  @foreach($importantnumbers as $importantnumber)
    <ul>
      <li>Nama: <a href="/dashboard/nomor-penting/{{$importantnumber->id}}">{{$importantnumber->name}}</a></li>
      <li>Nomor Telepon: {{$importantnumber->phone}}</li>
      <li>Email: {{$importantnumber->email}}</li>
    </ul>
    <p>
      {!!$importantnumber->description!!}
    </p>

    <a href="/dashboard/nomor-penting/{{$importantnumber->id}}/edit">edit</a>
  @endforeach
</div>
</div>
@endsection
