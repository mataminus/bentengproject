<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Faq;
class FaqController extends Controller
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
        $faqs = Faq::orderBy('created_at','id')->paginate(3);
        return view('dashboard.faq.index',['faqs'=>$faqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.faq.create');
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

        // Instansiasi
        $faqs = new Faq;
        $faqs->title = $request->title;
        $faqs->description = $request->description;
        // Upload Image
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $faqs->cover = $filename;

        // Path
        $path = public_path()."/image/faq";
        $photo->move($path,$filename);

        $faqs->save();
        return redirect('dashboard/faq');

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
        $faqs = Faq::find($id);
        return view('dashboard.faq.single')->with('faqs',$faqs);
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
        $faqs = Faq::find($id);
        return view('dashboard.faq.edit')->with('faqs',$faqs);
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

        // Instansiasi
        $faqs = Faq::find($id);
        $faqs->title = $request->title;
        $faqs->description = $request->description;
        // Upload Image
        $photo = $request->file('photo');
        $filename = $photo->getClientOriginalName();
        $faqs->cover = $filename;

        // Path
        $path = public_path()."/image/faq";
        $photo->move($path,$filename);

        $faqs->save();
        return redirect('dashboard/faq');


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
        $faqs = Faq::find($id);
        $faqs->delete();
        return redirect('dashboard/faq');
    }
}
