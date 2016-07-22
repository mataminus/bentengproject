<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Officer;
class OfficerController extends Controller
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
        $officers = Officer::orderBy('created_at','id')->paginate(3);
        return view('dashboard.officer.index',['officers'=>$officers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.officer.create');
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
          'description'=>'required',
          'job'=>'required',
          'motto'=>'required',
          'email'=>'required',
        ]);

        $officers = New Officer;
        $officers->name = $request->name;
        $officers->description = $request->description;
        $officers->job = $request->job;
        $officers->motto = $request->motto;
        $officers->email = $request->email;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $officers->cover = $filename;
        // Path
        $path = public_path().'/image/officer';
        $photo->move($path,$filename);

        $officers->save();
        return redirect('dashboard/sumber-daya-manusia');

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
        $officers = Officer::find($id);
        return view('dashboard.officer.single')->with('officers',$officers);
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
        $officers = Officer::find($id);
        return view('dashboard.officer.edit')->with('officers',$officers);
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
          'description'=>'required',
          'job'=>'required',
          'motto'=>'required',
          'email'=>'required',
        ]);

        $officers = Officer::find($id);
        $officers->name = $request->name;
        $officers->description = $request->description;
        $officers->job = $request->job;
        $officers->motto = $request->motto;
        $officers->email = $request->email;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $officers->cover = $filename;
        // Path
        $path = public_path().'/image/officer';
        $photo->move($path,$filename);

        $officers->save();
        return redirect('dashboard/sumber-daya-manusia');

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

        $officers = Officer::find($id);
        $officers->delete();
        return redirect('dashboard/sumber-daya-manusia');
    }
}
