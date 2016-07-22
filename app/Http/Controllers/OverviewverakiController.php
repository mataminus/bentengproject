<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Overviewveraki;
class OverviewverakiController extends Controller
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
        $overviewverakis = Overviewveraki::all();
        return view('dashboard.overview-veraki.index',['overviewverakis'=>$overviewverakis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.overview-veraki.create');
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

        $overviewverakis = New overviewveraki;
        $overviewverakis->title = $request->title;
        $overviewverakis->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviewverakis->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviewverakis->save();
        return redirect('dashboard/layanan-veraki');

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
        $overviewverakis = Overviewveraki::find($id);
        return view('dashboard.overview-veraki.single')->with('overviewverakis',$overviewverakis);
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
        $overviewverakis = Overviewveraki::find($id);
        return view('dashboard.overview-veraki.edit')->with('overviewverakis',$overviewverakis);
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

        $overviewverakis = Overviewveraki::find($id);
        $overviewverakis->title = $request->title;
        $overviewverakis->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviewverakis->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviewverakis->save();
        return redirect('dashboard/layanan-veraki');

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

        $overviewverakis = Overviewveraki::find($id);
        $overviewverakis->delete();
        return redirect('dashboard/layanan-veraki');
    }
}
