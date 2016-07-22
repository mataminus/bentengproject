@extends('dashboard.index')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXTRAS PORTLET-->
                        <div class="portlet light form-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Posting Artikel</span>
                                </div>

                            </div>
                            <div class="portlet-body form">

                                <form class="form-horizontal form-bordered" method="POST" action="/dashboard/blog" enctype="multipart/form-data">

                                    <div class="form-body">
                                        <div class="form-group last">

                                            <div class="col-md-10">
                                              <input type="text" name="title" value="" placeholder="Isilah Judul Artikel....">
                                              <br>
                                              <input type="text" name="author" value="" placeholder="Isilah Pengarang...">
                                              <br>
                                              <input type="text" name="category" value="" placeholder="kategori...">
                                              <br>
                                              <input type="file" name="photo" value="" placeholder="Sampul Gambar...">
                                              <br>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea id="summernote_1" name="description" placeholder="isilah konten..."> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-2 col-md-10">
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="submit" class="btn green" name="submit" value="post">


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



  </div>
</div>
@endsection
