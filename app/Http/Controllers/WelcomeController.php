<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;
class WelcomeController extends Controller
{

  public function blog()
  {
      $blogs = Blog::orderBy('created_at','id')->paginate(3);
      return view('welcome',['blogs'=>$blogs]);
  }

  public function singleBlog($title)
  {
    $blogs = Blog::where('slug',$title)->first();

    return view('front.blog.single')->with('blogs',$blogs);
  }

}
