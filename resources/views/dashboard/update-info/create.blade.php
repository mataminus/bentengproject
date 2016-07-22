@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <form class="" action="/dashboard/update-info" method="post">
      <label for="">Update 1</label>
      <input type="text" name="update1" value="">
      <br>
      <label for="">Update 2</label>
      <input type="text" name="update2" value="">
      <br>
      <label for="">Update 3</label>
      <input type="text" name="update3" value="">
      <br>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="post">
    </form>
  </div>
</div>
@endsection
