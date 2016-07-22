<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Visionmission;
class VisionmissionController extends Controller
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
        $visionmissions = Visionmission::all();
        return view('dashboard.visionmission.index',['visionmissions'=>$visionmissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.visionmission.create');
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
          'description'=>'required',
        ]);

        $visionmissions = New Visionmission;
        $visionmissions->title = $request->title;
        $visionmissions->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $visionmissions->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $visionmissions->save();
        return redirect('dashboard/visi-misi');

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
        $visionmissions = Visionmission::find($id);
        return view('dashboard.visionmission.single')->with('visionmissions',$visionmissions);
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
        $visionmissions = Visionmission::find($id);
        return view('dashboard.visionmission.edit')->with('visionmissions',$visionmissions);
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
          'title'=>'required',
          'description'=>'required',
        ]);

        $visionmissions = Visionmission::find($id);
        $visionmissions->title = $request->title;
        $visionmissions->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $visionmissions->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $visionmissions->save();
        return redirect('dashboard/visi-misi');

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

        $visionmissions = Visionmission::find($id);
        $visionmissions->delete();
        return redirect('dashboard/visi-misi');
    }
}
