<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Downloadapp;
class DownloadappController extends Controller
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
         $downloadapps = Downloadapp::orderBy('created_at','id')->paginate(3);
         return view('dashboard.download-app.index',['downloadapps'=>$downloadapps]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //

         return view('dashboard.download-app.create');
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
          'name'=>'required',
          'category'=>'required',
          'link'=>'required',
          'description'=>'required',
          ]);

          //
          $downloadapps = New Downloadapp;
          $downloadapps->name = $request->name;
          $downloadapps->category = $request->category;
          $downloadapps->link = $request->link;
          $downloadapps->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadapps->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $photo->move($path,$filename);

          $downloadapps->save();
          return redirect('dashboard/download-aplikasi');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $downloadapps = Downloadapp::find($id);
        return view('dashboard.download-app.single')->with('downloadapps',$downloadapps);
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
        $downloadapps = Downloadapp::find($id);
        return view('dashboard.download-app.edit')->with('downloadapps',$downloadapps);
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
        $this->validate($request,[
          'name'=>'required',
          'category'=>'required',
          'link'=>'required',
          'description'=>'required',
          ]);

          //
          $downloadapps = Downloadapp::find($id);
          $downloadapps->name = $request->name;
          $downloadapps->category = $request->category;
          $downloadapps->link = $request->link;
          $downloadapps->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadapps->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $path->move($path,$filename);

          $downloadapps->save();
          return redirect('dashboard/download-aplikasi');


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
        $downloadapps = Downloadapp::find($id);
        $downloadapps->delete();
        return redirect('dashboard/download-aplikasi');
    }
}
