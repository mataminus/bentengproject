<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kemenkeuvalue;
class KemenkeuvalueController extends Controller
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
        $kemenkeuvalues = Kemenkeuvalue::all();
        return view('dashboard.kemenkeuvalue.index',['kemenkeuvalues'=>$kemenkeuvalues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.kemenkeuvalue.create');
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
          // 'photo'=>'required',
          'description'=>'required',
        ]);

        // Instansiasi
        $kemenkeuvalues = new Kemenkeuvalue;
        $kemenkeuvalues->title = $request->title;
        $kemenkeuvalues->photo = $request->photo;
        $kemenkeuvalues->description = $request->description;
        //Upload file;
        $foto = $request->file('foto');
        $filename = $foto->getClientOriginalName();
        $kemenkeuvalues->photo = $filename;

        $path = public_path().'/image/organization';
        $foto->move($path,$filename);
        $kemenkeuvalues->save();
        redirect('dashboard/nilai-kemenkeu');
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
        $kemenkeuvalues = Kemenkeuvalue::find($id);
        return view('dashboard.kemenkeuvalue.single')->with('kemenkeuvalues',$kemenkeuvalues);
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
        $kemenkeuvalues = Kemenkeuvalue::find($id);
        return view('dashboard.kemenkeuvalue.edit')->with('kemenkeuvalues',$kemenkeuvalues);
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
          'photo'=>'required',
          'description'=>'required',
        ]);

        // Instansiasi
        $kemenkeuvalues = Kemenkeuvalue::find($id);
        $kemenkeuvalues->title = $request->title;
        $kemenkeuvalues->photo = $request->photo;
        $kemenkeuvalues->description = $request->description;
        //Upload file;
        $foto = $request->file('foto');
        $filename = $foto->getClientOriginalName();
        $kemenkeuvalues->photo = $filename;

        $path = public_path().'/image/organization';
        $foto->move($path,$filename);
        $kemenkeuvalues->save();
        redirect('dashboard/nilai-kemenkeu');


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
        $kemenkeuvalues = Kemenkeuvalue::find($id);
        $kemenkeuvalues->delete();
        redirect ('dashboard/nilai-kemenkeu');
    }
}
