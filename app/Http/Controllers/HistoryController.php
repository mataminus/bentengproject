<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\History;
class HistoryController extends Controller
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
        $histories = History::all();
        return view('dashboard.history.index',['histories'=>$histories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.history.create');
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
          // 'cover'=>'required',
          'description'=>'required',
        ]);

        // Instansiasi
        $histories = new History;
        $histories->title = $request->title;
        $histories->description = $request->description;
        // Input Foto
        $photo = $request->file('photo');
        $filename = "sejarah".$photo->getClientOriginalName();
        $histories->cover = $filename;
        // Lokasi Foto dipindahkan
        $path = public_path().'/image/organization';
        $photo->move($path,$filename);
        // Simpan Instansiasi
        $histories->save();

        return redirect('dashboard/sejarah');


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
        $histories = History::find($id);
        return view('dashboard.history.single')->with('histories',$histories);
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

        $histories = History::find($id);

        return view('dashboard.history.edit')->with('histories',$histories);



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
                  // 'cover'=>'required',
                  'description'=>'required',
                ]);

                // Instansiasi
                $histories = History::find($id);
                $histories->title = $request->title;
                $histories->description = $request->description;
                // Input Foto
                $photo = $request->file('photo');
                $filename = "sejarah".$photo->getClientOriginalName();
                $histories->cover = $filename;
                // Lokasi Foto dipindahkan
                $path = public_path().'/image/organization';
                $photo->move($path,$filename);
                // Simpan Instansiasi
                $histories->save();

                return redirect('dashboard/sejarah');
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

        $histories = History::find($id);
        $histories->delete();
        return redirect('dashboard/history');
    }
}
