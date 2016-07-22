<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Overview;
class OverviewController extends Controller
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
        $overviews = Overview::all();
        return view('dashboard.overview.index',['overviews'=>$overviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.overview.create');
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

        $overviews = New Overview;
        $overviews->title = $request->title;
        $overviews->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviews->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviews->save();
        return redirect('dashboard/layanan');

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
        $overviews = Overview::find($id);
        return view('dashboard.overview.single')->with('overviews',$overviews);
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
        $overviews = Overview::find($id);
        return view('dashboard.overview.edit')->with('overviews',$overviews);
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

        $overviews = Overview::find($id);
        $overviews->title = $request->title;
        $overviews->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviews->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviews->save();
        return redirect('dashboard/layanan');

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

        $overviews = Overview::find($id);
        $overviews->delete();
        return redirect('dashboard/layanan');
    }
}
