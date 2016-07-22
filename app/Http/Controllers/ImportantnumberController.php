<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Importantnumber;
class ImportantnumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $importantnumbers = Importantnumber::all();
        return view('dashboard.phone.index',['importantnumbers'=>$importantnumbers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.phone.create');
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
          'phone'=>'required',
          'description'=>'required',
          'email'=>'required',
        ]);

        $importantnumbers = new Importantnumber;
        $importantnumbers->name = $request->name;
        $importantnumbers->phone = $request->phone;
        $importantnumbers->description = $request->description;
        $importantnumbers->email = $request->email;
        $importantnumbers->save();

        return redirect('dashboard/nomor-penting');
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
        $importantnumbers = Importantnumber::find($id);
        return view('dashboard.phone.single')->with('importantnumbers',$importantnumbers);
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
        $importantnumbers = Importantnumber::find($id);
        return view('dashboard.phone.edit')->with('importantnumbers',$importantnumbers);
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
          'phone'=>'required',
          'description'=>'required',
          'email'=>'required',
        ]);

        $importantnumbers = Importantnumber::find($id);
        $importantnumbers->name = $request->name;
        $importantnumbers->phone = $request->phone;
        $importantnumbers->description = $request->description;
        $importantnumbers->email = $request->email;
        $importantnumbers->save();

        return redirect('dashboard/nomor-penting');
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
        $importantnumbers = Importantnumber::find($id);
        return redirect('dashboard/nomor-penting');
    }
}
