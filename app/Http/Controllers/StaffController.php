<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Office;
use Session;
use Illuminate\Support\Facades\Hash;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show All User=>Staff
        $staffs =User::all();
        $countstaffs =User::where('level', '=', 2)->get();
        //$countstaffs = DB::table('users')->where('level', '=', 2)->get();
        $i=1;
        return view('admin.staff.index')->withstaffs($staffs)->withCountstaffs($countstaffs)->withI($i); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $offices = Office::all();
        return view('admin.staff.create')->withOffices($offices);

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
        //Validate
         $this->validate($request , array(
                'name'                 => 'required|max:255',
                'email'                =>'required|max:255|email',
                'phone_number'         => 'required|max:10|min:10',
                'office'               => 'required|max:255',
              
           
        ));

        $staff = new User ;

        $staff->name=$request->name;
        $staff->email=$request->email;
        $staff->phone_number=$request->phone_number;
        $staff->office_id=$request->office;
        $staff->state="Active";
        $staff->level=2;
        $staff->password=Hash::make('Password');
    

    

        $staff->save();
         //flash messge

        Session::flash('SUCCESS','DONE ADD NEW STAFF !');

        // redirect
        return redirect()->route('Staff.show',$staff->id);
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
        $staff = User::find($id);
        return view('admin.staff.show')->withStaff($staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Get the user by id
        $staff = User::find($id);
        $offices = Office::all();

        return view('admin.staff.edit')->withStaff($staff)->withOffices($offices);
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
         //Get Data
         $staff = User::find($id);
         //validate
         $this->validate($request , array(
            'name'           => 'required|max:255',
            'email'          =>'required|max:255|email',
            'phone_number'   => 'required|max:10|min:10',
            'office'         => 'required|max:255',
            'state'          => 'required|max:255',

       ));


       //Save data
       $staff->name=$request->input('name');
       $staff->email=$request->input('email');
       $staff->phone_number=$request->input('phone_number');
       $staff->office_id=$request->input('office');
       $staff->state=$request->input('state');
       $staff->save();

         //flash messge
        Session::flash('SUCCESS','DONE EDIT STAFF DATA !');

        // redirect
        return redirect()->route('Staff.show',$staff->id);
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
        $user = User::find($id);
        // $counter->tags()->detach();
 
         $user->delete();
 
         Session::flash('success','This staff Successfully Delete  !');
 
 
        // return redirect()->route('Staff.index');
        // $ss=url()->previous()
        return back();
         


        
    }
}
