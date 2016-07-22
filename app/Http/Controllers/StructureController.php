<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Structure;
class structureController extends Controller
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
        $structures = Structure::all();
        return view('dashboard.structure.index',['structures'=>$structures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.structure.create');
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

        $structures = New structure;
        $structures->title = $request->title;
        $structures->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $structures->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $structures->save();
        return redirect('dashboard/struktur-organisasi');

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
        $structures = Structure::find($id);
        return view('dashboard.structure.single')->with('structures',$structures);
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
        $structures = Structure::find($id);
        return view('dashboard.structure.edit')->with('structures',$structures);
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

        $structures = Structure::find($id);
        $structures->title = $request->title;
        $structures->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $structures->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $structures->save();
        return redirect('dashboard/struktur-organisasi');

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

        $structures = Structure::find($id);
        $structures->delete();
        return redirect('dashboard/struktur-organisasi');
    }
}
