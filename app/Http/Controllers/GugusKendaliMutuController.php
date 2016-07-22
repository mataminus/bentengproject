<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guguskendalimutu;
class GugusKendaliMutuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guguskendalimutus = Guguskendalimutu::orderBy('created_at','id')->paginate(5);
        return view('dashboard.gugus-kendali-mutu.index',['guguskendalimutus'=>$guguskendalimutus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.gugus-kendali-mutu.create');
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
          'speaker'=>'required',
          'day'=>'required',
          'description'=>'required',
        ]);

        $guguskendalimutus = new Guguskendalimutu;
        $guguskendalimutus->title = $request->title;
        $guguskendalimutus->speaker = $request->speaker;
        $guguskendalimutus->day = $request->day;
        $guguskendalimutus->description = $request->description;

        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $path = public_path().'/image/gkm';
        $guguskendalimutus->cover = $filename;
        $photo->move($path,$filename);

        $guguskendalimutus->save();

        return redirect('dashboard/gugus-kendali-mutu');
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
        $guguskendalimutus = Guguskendalimutu::find($id);
        return view('dashboard.gugus-kendali-mutu.single')->with('guguskendalimutus',$guguskendalimutus);
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
        $guguskendalimutus = Guguskendalimutu::find($id);
        return view('dashboard.gugus-kendali-mutu.edit')->with('guguskendalimutus',$guguskendalimutus);
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
          'speaker'=>'required',
          'day'=>'required',
          'description'=>'required',
        ]);

        $guguskendalimutus = Guguskendalimutu::find($id);
        $guguskendalimutus->title = $request->title;
        $guguskendalimutus->speaker = $request->speaker;
        $guguskendalimutus->day = $request->day;
        $guguskendalimutus->description = $request->description;

        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $path = public_path().'/image/gkm';
        $guguskendalimutus->cover = $filename;
        $photo->move($path,$filename);

        $guguskendalimutus->save();

        return redirect('dashboard/gugus-kendali-mutu');
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
        $guguskendalimutus = Guguskendalimutu::find($id);
        $guguskendalimutus->delete();
        return redirect('dashboard/gugus-kendali-mutu');
    }
}
