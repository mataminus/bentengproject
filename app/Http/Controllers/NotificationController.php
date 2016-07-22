<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notifications = Notification::all();
        return view('dashboard.update-info.index',['notifications'=>$notifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.update-info.create');
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
          'update1'=>'required',
          'update2'=>'required',
          'update3'=>'required',
        ]);

        //
        $notifications = new Notification;
        $notifications->update1 = $request->update1;
        $notifications->update2 = $request->update2;
        $notifications->update3 = $request->update3;

        $notifications->save();
        return redirect('dashboard/update-info');
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
        $notifications = Notification::find($id);
        return view('dashboard.update-info.single')->with('notifications',$notifications);
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
        $notifications = Notification::find($id);
        return view('dashboard.update-info.edit')->with('notifications',$notifications);
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
          'update1'=>'required',
          'update2'=>'required',
          'update3'=>'required',
        ]);

        //
        $notifications =Notification::find($id);
        $notifications->update1 = $request->update1;
        $notifications->update2 = $request->update2;
        $notifications->update3 = $request->update3;

        $notifications->save();
        return redirect('dashboard/update-info');
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
        $notifications = Notification::find($id);
        $notifications->delete();
        return redirect('dashboard/update-info');
    }
}
