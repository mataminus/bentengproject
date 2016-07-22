<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Downloadrule;
class DownloadruleController extends Controller
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
         $downloadrules = Downloadrule::orderBy('created_at','id')->paginate(3);
         return view('dashboard.download-rule.index',['downloadrules'=>$downloadrules]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //

         return view('dashboard.download-rule.create');
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
          $downloadrules = New Downloadrule;
          $downloadrules->name = $request->name;
          $downloadrules->category = $request->category;
          $downloadrules->link = $request->link;
          $downloadrules->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadrules->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $photo->move($path,$filename);

          $downloadrules->save();
          return redirect('dashboard/download-peraturan');


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
        $downloadrules = Downloadrule::find($id);
        return view('dashboard.download-rule.single')->with('downloadrules',$downloadrules);
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
        $downloadrules = Downloadrule::find($id);
        return view('dashboard.download-rule.edit')->with('downloadrules',$downloadrules);
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
          $downloadrules = Downloadrule::find($id);
          $downloadrules->name = $request->name;
          $downloadrules->category = $request->category;
          $downloadrules->link = $request->link;
          $downloadrules->description = $request->description;
          // Upload Image
          $photo = $request->file('photo');
          $filename = $photo->getClientOriginalName();
          $downloadrules->cover = $filename;
          // Path
          $path = public_path().'/image/cover-download';
          $path->move($path,$filename);

          $downloadrules->save();
          return redirect('dashboard/download-peraturan');


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
        $downloadrules = Downloadrule::find($id);
        $downloadrules->delete();
        return redirect('dashboard/download-peraturan');
    }
}
