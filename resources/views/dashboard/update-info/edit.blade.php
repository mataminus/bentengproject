@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <form class="" action="/dashboard/update-info/{{$notifications->id}}" method="post">
      <label for="">Update 1</label>
      <input type="text" name="update1" value="{{$notifications->update1}}">
      <br>
      <label for="">Update 2</label>
      <input type="text" name="update2" value="{{$notifications->update2}}">
      <br>
      <label for="">Update 3</label>
      <input type="text" name="update3" value="{{$notifications->update3}}">
      <br>
      <input type="hidden" name="_method" value="put">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="edit" value="edit">
    </form>
  </div>
</div>
@endsection
