<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tutorial;
class TutorialController extends Controller
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
        $tutorials = Tutorial::orderBy('created_at','id')->paginate(3);
        return view('dashboard.tutorial.index',['tutorials'=>$tutorials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.tutorial.create');

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
          'embed'=>'required',
          'description'=>'required',
        ]);


        $tutorials = new Tutorial;
        $tutorials->title = $request->title;
        $tutorials->embed = $request->embed;
        $tutorials->description = $request->description;

        $tutorials->save();

        return redirect('dashboard/tutorial');
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
        $tutorials = Tutorial::find($id);
        return view('dashboard.tutorial.single')->with('tutorials',$tutorials);
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
        $tutorials = Tutorial::find($id);
        return view('dashboard.tutorial.edit')->with('tutorials',$tutorials);
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
          'embed'=>'required',
          'description'=>'required',
        ]);


        $tutorials = Tutorial::find($id);
        $tutorials->title = $request->title;
        $tutorials->embed = $request->embed;
        $tutorials->description = $request->description;

        $tutorials->save();

        return redirect('dashboard/tutorial');
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
        $tutorials = Tutorial::find($id);
        $tutorials->delete();
        return redirect('dashboard/tutorial');
    }
}
