@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-info"><b>{{$blogs->title}}</b></h1>
    <p>
      oleh : {{$blogs->author}}
    </p>
  <div class="row center-block">
      <div class="col-md-6 ">
      <img src="/image/blog/{{$blogs->cover}}" alt="" class="img-thumbnail img-responsive center-block " />
    </div>
  </div>
    <p>
      Diposting pada: {{date('d F Y',strtotime($blogs->created_at))}} | kategori: {{$blogs->category}}
    </p>




   <blockquote class=" bg-success">
     <p>
        {!!$blogs->description!!}
      </p>
   </blockquote>


  </div>
</div>

@endsection
