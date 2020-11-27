<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Office;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;


class MaintenanceWorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //show All User=>Workers
         $workers =User::all();
         $countworkers =User::where('level', '=', 3)->get();
        //  return
        $i =1;
        return view('admin.workers.index')
        ->withWorkers($workers)
        ->withCountworkers($countworkers)->withI($i); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices = Office::all();
        return view('admin.workers.create')->withOffices($offices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validate
         $this->validate($request , array(
            'name'           => 'required|max:255',
            'email'          =>'required|max:255|email|unique:users',
            'phone_number'           => 'required|max:10|min:10',
          
       
         ));

    $worker = new User ;

    $worker->name=$request->name;
    $worker->email=$request->email;
    $worker->phone_number=$request->phone_number;
    $worker->office_id=$request->office ;
    $worker->state="Active";
    $worker->level=3;
    $worker->password='Password';



    $worker->save();
     //flash messge

    Session::flash('SUCCESS','DONE ADD NEW worker !');

    // redirect
    return redirect()->route('Workers.show',$worker->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $worker = User::find($id);
        return view('admin.workers.show')->withWorker($worker);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worker = User::find($id);
        return view('admin.workers.edit')->withWorker($worker);
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
         //Get Data
         $worker = User::find($id);
         //validate
         $this->validate($request , array(
            'name'           => 'required|max:255',
            'email'          =>'required|max:255|email',
            'phone_number'           => 'required|max:10|min:10',
            'state'           => 'required|max:255',

       ));

        //Save data
        $worker->name=$request->input('name');
        $worker->email=$request->input('email');
        $worker->phone_number=$request->input('phone_number');
        $worker->state=$request->input('state');
        $worker->save();
 
          //flash messge
         Session::flash('SUCCESS','DONE ADD NEW worker !');
 
         // redirect
         return redirect()->route('Workers.show',$worker->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = User::find($id);
        $worker->delete();
 
        Session::flash('SUCCESS','This Worker Successfully Delete  !');
 
 
        return redirect()->route('Workers.index');
        // $ss=url()->previous()
       // return back();
         
    }
}
