<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Overviewbank;
class OverviewbankController extends Controller
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
        $overviewbanks = Overviewbank::all();
        return view('dashboard.overview-bank.index',['overviewbanks'=>$overviewbanks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.overview-bank.create');
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

        $overviewbanks = New Overviewbank;
        $overviewbanks->title = $request->title;
        $overviewbanks->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviewbanks->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviewbanks->save();
        return redirect('dashboard/layanan-bank');

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
        $overviewbanks = Overviewbank::find($id);
        return view('dashboard.overview-bank.single')->with('overviewbanks',$overviewbanks);
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
        $overviewbanks = Overviewbank::find($id);
        return view('dashboard.overview-bank.edit')->with('overviewbanks',$overviewbanks);
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

        $overviewbanks = Overviewbank::find($id);
        $overviewbanks->title = $request->title;
        $overviewbanks->description = $request->description;
        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $overviewbanks->cover = $filename;
        // Path
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);

        $overviewbanks->save();
        return redirect('dashboard/layanan-bank');

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

        $overviewbanks = Overviewbank::find($id);
        $overviewbanks->delete();
        return redirect('dashboard/layanan-bank');
    }
}
