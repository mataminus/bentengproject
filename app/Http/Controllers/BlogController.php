<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
         $this->middleware('auth');
     }

    public function index()
    {
        //
        $blogs = Blog::orderBy('created_at','id')->paginate(3);
        return view('dashboard.blog.index',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
          'title'=>'required',
          'author'=>'required',
          'description'=>'required',
        ]);

        $blogs = new Blog;
        $blogs->title = $request->title;
        $blogs->slug = str_slug($request->title,'-');
        $blogs->author = $request->author;
        $blogs->category = $request->category;
        $blogs->description = $request->description;
        // Upload Foto untuk Cover Artikel
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $blogs->cover = $filename;

        $path = public_path().'/image/blog';
        $photo->move($path,$filename);
      // End Upload Foto untuk Cover Artikel

      // Simpan Instansiasi
        $blogs->save();

        return redirect('dashboard/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
      // $blogs = Blog::find($id);
      $blogs = Blog::where('slug',$title)->first();


        return view('dashboard.blog.single')->with('blogs',$blogs);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blogs = Blog::find($id);

        return view('dashboard.blog.edit')->with('blogs',$blogs);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        //
        $this->validate($request,[
          'title'=>'required',
          'author'=>'required',
          'description'=>'required',
        ]);

        $blogs = Blog::find($id);
        $blogs->title = $request->title;
        $blogs->slug = str_slug($request->title,'-');
        $blogs->author = $request->author;
        $blogs->category = $request->category;
        $blogs->description = $request->description;
        // Upload Foto untuk Cover Artikel
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $blogs->cover = $filename;

        $path = public_path().'/image/blog';
        $photo->move($path,$filename);
      // End Upload Foto untuk Cover Artikel

      // Simpan Instansiasi
        $blogs->save();

        return redirect('dashboard/blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect('dashboard/blog');
    }
}
