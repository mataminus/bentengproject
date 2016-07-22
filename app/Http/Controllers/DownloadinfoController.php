<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Downloadinfo;
class DownloadinfoController extends Controller
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
         $downloadinfos = Downloadinfo::orderBy('created_at','id')->paginate(3);
         return view('dashboard.download-info.index',['downloadinfos'=>$downloadinfos]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //

         return view('dashboard.download-info.create');
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
          $downloadinfos = New Downloadinfo;
          $downloadinfos->name = $request->name;
          $downloadinfos->category = $request->category;
          $downloadinfos->link = $request->link;
          $downloadinfos->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadinfos->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $photo->move($path,$filename);

          $downloadinfos->save();
          return redirect('dashboard/download-pengumuman');


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
        $downloadinfos = Downloadinfo::find($id);
        return view('dashboard.download-info.single')->with('downloadinfos',$downloadinfos);
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
        $downloadinfos = Downloadinfo::find($id);
        return view('dashboard.download-info.edit')->with('downloadinfos',$downloadinfos);
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
          $downloadinfos = Downloadinfo::find($id);
          $downloadinfos->name = $request->name;
          $downloadinfos->category = $request->category;
          $downloadinfos->link = $request->link;
          $downloadinfos->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadinfos->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $path->move($path,$filename);

          $downloadinfos->save();
          return redirect('dashboard/download-pengumuman');


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
        $downloadinfos = Downloadinfo::find($id);
        $downloadinfos->delete();
        return redirect('dashboard/download-pengumuman');
    }
}
