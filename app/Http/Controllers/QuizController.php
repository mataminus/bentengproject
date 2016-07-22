<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Quiz;
class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quizzes = Quiz::paginate(10);
        return view('dashboard.kuis-kppn.index',['quizzes'=>$quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.kuis-kppn.create');
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
          'kuis'=>'required',
        ]);

        $quizzes = new Quiz;
        $quizzes->kuis = $request->kuis;
        $quizzes->save();

        return redirect('dashboard/kuis-kppn');
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
        $quizzes = Quiz::find($id);
        return view('dashboard.kuis-kppn.single')->with('quizzes',$quizzes);
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
        $quizzes = Quiz::find($id);
        return view('dashboard.kuis-kppn.edit')->with('quizzes',$quizzes);
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
          'kuis'=>'required',
        ]);

        $quizzes = Quiz::find($id);
        $quizzes->kuis = $request->kuis;
        $quizzes->save();

        return redirect('dashboard/kuis-kppn');
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
        $quizzes = Quiz::find($id);
        $quizzes->delete();
        return redirect('dashboard/kuis-kppn');
    }
}
