<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Downloadbook;
class DownloadbookController extends Controller
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
         $downloadbooks = Downloadbook::orderBy('created_at','id')->paginate(3);
         return view('dashboard.download-book.index',['downloadbooks'=>$downloadbooks]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //

         return view('dashboard.download-book.create');
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
          $downloadbooks = New Downloadbook;
          $downloadbooks->name = $request->name;
          $downloadbooks->category = $request->category;
          $downloadbooks->link = $request->link;
          $downloadbooks->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadbooks->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $photo->move($path,$filename);

          $downloadbooks->save();
          return redirect('dashboard/download-buku-saku');


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
        $downloadbooks = Downloadbook::find($id);
        return view('dashboard.download-book.single')->with('downloadbooks',$downloadbooks);
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
        $downloadbooks = Downloadbook::find($id);
        return view('dashboard.download-book.edit')->with('downloadbooks',$downloadbooks);
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
          $downloadbooks = Downloadbook::find($id);
          $downloadbooks->name = $request->name;
          $downloadbooks->category = $request->category;
          $downloadbooks->link = $request->link;
          $downloadbooks->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadbooks->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $path->move($path,$filename);

          $downloadbooks->save();
          return redirect('dashboard/download-buku-saku');


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
        $downloadbooks = Downloadbook::find($id);
        $downloadbooks->delete();
        return redirect('dashboard/download-buku-saku');
    }
}
