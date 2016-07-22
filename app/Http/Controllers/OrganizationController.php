<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Organization;

class OrganizationController extends Controller
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
        $organizations = Organization::all();
        return view('dashboard.organization.index',['organizations'=>$organizations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.organization.create');
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
          'title' => 'required',
          // 'cover' => 'required',
          // 'embed' => 'required',
          'description' => 'required',
        ]);

        //Instansiasi
        $organizations = New Organization;
        $organizations->title = $request->title;
        // $organizations->cover = $request->cover;
        $organizations->embed = $request->embed;
        $organizations->description = $request->description;
        // Upload Foto untuk Cover Artikel
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $organizations->cover = $filename;

        $path = public_path().'/image/organization';
        $photo->move($path,$filename);
      // End Upload Foto untuk Cover Artikel
        $organizations->save();

        return redirect('dashboard/organisasi');
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
        $organizations = Organization::find($id);
        return view('dashboard.organization.single')->with('organizations',$organizations);

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
        $organizations = Organization::find($id);
        return view('dashboard.organization.edit')->with('organizations',$organizations);

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
          'title' => 'required',
          'cover' => 'required',
          'embed' => 'required',
          'description' => 'required',
        ]);

        $organizations = Organization::find($id);
        $organizations->title = $request->title;
        $organizations->cover = $request->cover;
        $organizations->embed = $request->embed;
        $organizations->description = $request->description;



        $organizations->save();

        return redirect('dashboard/organisasi');
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
        $organizations = Organization::find($id);
        $organizations->delete();

        return redirect('dashboard/organisasi');
    }
}
