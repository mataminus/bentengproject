<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kamuskppn;
class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kamuskppns = Kamuskppn::orderBy('created_at','id')->paginate(5);
        return view('dashboard.kamus-kppn.index',['kamuskppns'=>$kamuskppns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.kamus-kppn.create');
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
        ]);

        // Instansiasi
        $kamuskppns = new Kamuskppn;
        $kamuskppns->name = $request->name;
        $kamuskppns->description = $request->description;
        // Upload File
    

        $kamuskppns->save();

        return redirect('dashboard/kamus-kppn');
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
        $kamuskppns = Kamuskppn::find($id);
        return view('dashboard.kamus-kppn.single')->with('kamuskppns',$kamuskppns);
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
        $kamuskppns = Kamuskppn::find($id);
        return view('dashboard.kamus-kppn.edit')->with('kamuskppns',$kamuskppns);
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
        $this->validate($request,[
          'name'=>'required',
          'description'=>'required',
        ]);

        // Instansiasi
        $kamuskppns = Kamuskppn::find($id);
        $kamuskppns->name = $request->name;
        $kamuskppns->description = $request->description;
        // Upload File

        $kamuskppns->save();

        return redirect('dashboard/kamus-kppn');

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
        $kamuskppns = Kamuskppn::find($id);
        $kamuskppns->delete();

        return redirect('dashboard/kamus-kppn');
    }
}
