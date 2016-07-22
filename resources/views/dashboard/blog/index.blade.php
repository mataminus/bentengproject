@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="text-center text-info"><b>Daftar Artikel</b></h1>

    @foreach($blogs as $blog)
      <h1 class="text-info"><b><a href="/dashboard/blog/{{$blog->slug}}">{{$blog->title}}</a></b></h1>
      <p class="text-danger">
        oleh : {{$blog->author}}
      </p>
      <p class+"text-warning">
        Diposting pada: {{date('d F Y',strtotime($blog->created_at))}}
      </p>
      <p class="text-success">
        kategori: {{$blog->category}}
      </p>
      <a href="/dashboard/blog/{{$blog->id}}/edit">Edit</a>
      
      <form action="/dashboard/blog/{{$blog->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="hidden" name="_method" value="delete">
        <input type="submit" name="name" value="delete">
      </form>

    <div class="" style="background:rgb(55, 24, 249);height:5px;width:300px;">

    </div>
    @endforeach

    {{$blogs->links()}}
  </div>
</div>

@endsection
