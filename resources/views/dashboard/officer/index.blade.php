@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
<div class="row">
  <h1 class="text-center">Sumber Daya Manusia</h1>
  <br>
  @foreach($officers as $officer)
<div class="col-md-4">
  <h3><a href="/dashboard/sumber-daya-manusia/{{$officer->id}}">{{$officer->name}}</a></h3>
  <p>
    {{$officer->job}}
  </p>
  <p>
    Motto: {{$officer->motto}}
  </p>
  <p>
    E-mail: {{$officer->email}}
  </p>
    <div class="row">
    <div class="col-md-4">
      <img src="/image/officer/{{$officer->cover}}" alt="" class="img-responsive" />
    </div>
    </div>
  <p>
    {!!$officer->description!!}
  </p>
</div>
    @endforeach
    {{$officers->links()}}</div>
  </div>
</div>
@endsection
