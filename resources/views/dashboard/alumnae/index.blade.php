@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
<div class="row">
  <h1 class="text-center">Alumni</h1>
  <br>
  @foreach($alumnaes as $alumnae)
<div class="col-md-4">
  <h3><a href="/dashboard/alumni/{{$alumnae->id}}">{{$alumnae->name}}</a></h3>
  <p>
    {{$alumnae->job}}
  </p>
  <p>
    Masa Kerja: {{$alumnae->period}}
  </p>

    <div class="row">
    <div class="col-md-4">
      <img src="/image/alumnae/{{$alumnae->cover}}" alt="" class="img-responsive" />
    </div>
    </div>
  <p>
    {!!$alumnae->description!!}
  </p>
</div>
    @endforeach
    {{$alumnaes->links()}}</div>
  </div>
</div>
@endsection
