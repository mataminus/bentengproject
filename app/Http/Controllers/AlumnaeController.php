<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Alumnae;
class AlumnaeController extends Controller
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
        $alumnaes = Alumnae::orderBy('created_at','id')->paginate(3);
        return view('dashboard.alumnae.index',['alumnaes'=>$alumnaes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('dashboard.alumnae.create');
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
        'period'=>'required',

      ]);

      $alumnaes = new Alumnae;
      $alumnaes->name = $request->name;
      $alumnaes->description = $request->description;
      $alumnaes->job = $request->job;
      $alumnaes->period = $request->period;

      // Upload file
      $photo = $request->file('photo');
      $filename = $photo->getClientOriginalName();
      $alumnaes->cover = $filename;
      // Path
      $path = public_path().'/image/alumnae';
      $photo->move($path,$filename);

      $alumnaes->save();
      return redirect('dashboard/alumni');
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
        $alumnaes = Alumnae::find($id);
        return view('dashboard.alumnae.single')->with('alumnaes',$alumnaes);
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
        $alumnaes = Alumnae::find($id);
        return view('dashboard.alumnae.edit')->with('alumnaes',$alumnaes);
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
          'period'=>'required',

        ]);

        $alumnaes = Alumnae::find($id);
        $alumnaes->name = $request->name;
        $alumnaes->description = $request->description;
        $alumnaes->job = $request->job;
        $alumnaes->period = $request->period;

        // Upload file
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $alumnaes->cover = $filename;
        // Path
        $path = public_path().'/image/alumnae';
        $photo->move($path,$filename);

        $alumnaes->save();
        return redirect('dashboard/alumni');

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

        $alumnaes = Alumnae::find($id);
        $alumnaes->delete();
        return redirect('dashboard/alumni');
    }
}
