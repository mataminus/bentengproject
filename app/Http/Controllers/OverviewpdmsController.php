<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Overviewpdms;
class overviewpdmsController extends Controller
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
        $overviewpdms = Overviewpdms::all();
        return view('dashboard.overview-pdms.index',['overviewpdms'=>$overviewpdms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.overview-pdms.create');
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

        $overviewpdms = New overviewpdms;
        $overviewpdms->title = $request->title;
        $overviewpdms->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviewpdms->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviewpdms->save();
        return redirect('dashboard/layanan-pdms');

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
        $overviewpdms = Overviewpdms::find($id);
        return view('dashboard.overview-pdms.single')->with('overviewpdms',$overviewpdms);
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
        $overviewpdms = Overviewpdms::find($id);
        return view('dashboard.overview-pdms.edit')->with('overviewpdms',$overviewpdms);
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

        $overviewpdms = Overviewpdms::find($id);
        $overviewpdms->title = $request->title;
        $overviewpdms->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviewpdms->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviewpdms->save();
        return redirect('dashboard/layanan-pdms');

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

        $overviewpdms = Overviewpdms::find($id);
        $overviewpdms->delete();
        return redirect('dashboard/layanan-pdms');
    }
}
