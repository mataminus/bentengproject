@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center text-info">Tayangkan Update</h1>
      @foreach($notifications as $notification)

        <p>
          Update 1: {{$notification->update1}}
        </p>
        <p>
          Update 2: {{$notification->update2}}
        </p>
        <p>
          Update 3: {{$notification->update3}}
        </p>

        <p>
          <a href="/dashboard/update-info/{{$notification->id}}/edit">edit</a>
        </p>

      @endforeach

  </div>
</div>
@endsection
