@extends('front.layouts.app')

@section('content')




  <!-- Blog -->
     <section id="blog">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 blog space">
                     <div class="all-post col-sm-12 no-padding">
                         <!-- Post detail-->
                         <article class="col-sm-12 blog-block">
                             <a href="#"> <img class="img-responsive center-block" src="/image/blog/{{$blogs->cover}}" alt="Blog"></a>
                             <div class="blog-info col-sm-12">
                                 <div class="icon">
                                     <i class="fa fa-thumb-tack"></i>
                                 </div>
                                 <div class="blog-info-inner">
                                     <ul>
                                         <li data-toggle="tooltip" data-placement="top" title="Written by"><i class="fa fa-user"></i>{{$blogs->author}} </li>
                                         <li><i class="fa fa-folder-open-o"></i>{{$blogs->category}}</li>
                                         <li data-toggle="tooltip" data-placement="top" title="Published date"><i class="fa fa-calendar-o"></i>{{date('d F Y',strtotime($blogs->created_at))}}</li>

                                     </ul>
                                     <h4><a href="#">{{$blogs->title}}</a> </h4>
                                 </div>
                                 <p>{!!$blogs->description!!}</p>
                             </div>
                         </article>
                     </div>
                     <div class="large-margin col-sm-12 col-xs-12"></div>
                 </div>
             </div>
         </div>
     </section>




@endsection
