<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use Session;
use App\User;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //show All User=>Staff
          $offices =Office::all();
          return view('admin.office.index')->withoffices($offices); 
    }

    // index for staffs by office
    public function index_2($id)
    {
          //show All User=>Staff
          $office = Office::find($id);
          $staffs =User::where('office_id', '=', $id)->get();


          return view('admin.office.index_2_staff')->withoffice($office)->withStaffs($staffs); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , array(
            'office_name'        => 'required|max:255',
            'state'        => 'required|max:255',
            'local'        => 'required|max:255',
            
        ));

        //Insert

        $office = new Office ;

        $office->office_name=$request->office_name;
        $office->state=$request->state;
        $office->local=$request->local;
  

        $office->save();

        //flash messge

        Session::flash('success','The office Successfully Save !');

        // redirect
        return redirect()->route('Office.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //office by id
        $office = Office::find($id);
        // dd($office->office_name);
        return view('admin.office.show' , compact('office'));
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
         $office = Office::find($id);
         //validate
         $this->validate($request , array(
            'office_name'        => 'required|max:255',
            'state'        => 'required|max:255',
            'local'        => 'required|max:255',
       ));

        //Save data
        $office->office_name=$request->input('office_name');
        $office->state=$request->input('state');
        $office->local=$request->input('local');
  

        $office->save();

        //flash messge

        Session::flash('success','The office Successfully Edit !');

        // redirect
        return redirect()->route('Office.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office = Office::find($id);
        // $counter->tags()->detach();
       
        if( $office->users()->count()!=0)
        {
            Session::flash('error','This office cannot be deleted because it contains employees !');
                return redirect()->route('Office.index');

        }
        else
        {
             $office->delete();
 
         Session::flash('success','This Office Successfully Delete  !');
         return redirect()->route('Office.index');

 
        }
 
        
    }
}
