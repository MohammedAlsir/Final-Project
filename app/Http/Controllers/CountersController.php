<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counter;
use App\Sector_type;
use Session;


class CountersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters =Counter::all();
       //  return
       return view('user.counters.index')->withCounters($counters); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors =Sector_type::all();
        return view('user.counters.create')->withSectors($sectors);

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
            //  1
            'counter_number'          => 'required|max:255',
            // 2
            'full_name'               =>'required|max:255',
            // 3
            'patriot_number'          => 'required|max:255',
            // 4
            'neighborhood'            => 'required|max:255',
            // 5
            'square_number'           => 'required|max:255',
            // 6
            'street_number'           => 'required|max:255',
            // 7
            'phone_number'            => 'required|max:10|min:10',
            // 8
            'sector_type_id'          => 'required',
          
       
    ));

    $counter = new Counter ;

    $counter->counter_number=$request->counter_number;
    $counter->full_name=$request->full_name;
    $counter->patriot_number=$request->patriot_number;
    $counter->neighborhood=$request->neighborhood;
    $counter->square_number=$request->square_number;
    $counter->street_number=$request->street_number;
    $counter->phone_number=$request->phone_number;
    $counter->sector_type_id=$request->sector_type_id;

    $counter->office_id=$request->office_id;

    $counter->user_id=$request->user_id;

    $counter->password='Password';
   



    $counter->save();
     //flash messge

    Session::flash('SUCCESS','DONE ADD NEW COUNTER !');

    // redirect
    return redirect()->route('Counters.show',$counter->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $counter = Counter::find($id);
        return view('user.counters.show')->withCounter($counter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counter = Counter::find($id);
        $sectors =Sector_type::all();
        return view('user.counters.edit')->withCounter($counter)->withSectors($sectors);
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
        $counter = Counter::find($id);

         //Validate
         $this->validate($request , array(
            //  1
            'counter_number'           => 'required|max:255',
            // 2
            'full_name'          =>'required|max:255',
            // 3
            'patriot_number'           => 'required|max:255',
            // 4
            'neighborhood'           => 'required|max:255',
            // 5
            'square_number'           => 'required|max:255',
            // 6
            'street_number'           => 'required|max:255',
            // 7
            'phone_number'           => 'required|max:10|min:10',
            // 8
            'sector_type_id'           => 'required',
          
       
    ));

    $counter->counter_number=$request->input('counter_number');
    $counter->full_name=$request->input('full_name');
    $counter->patriot_number=$request->input('patriot_number');
    $counter->neighborhood=$request->input('neighborhood');
    $counter->square_number=$request->input('square_number');
    $counter->street_number=$request->input('street_number');
    $counter->phone_number=$request->input('phone_number');

    $counter->sector_type_id=$request->input('sector_type_id');
    $counter->user_id=$request->input('user_id');

    $counter->password='Password';


    
   



    $counter->save();
     //flash messge

    Session::flash('SUCCESS','DONE EDIT NEW COUNTER !');

    // redirect
    return redirect()->route('Counters.show',$counter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counter = Counter::find($id);
        $counter->delete();
 
        Session::flash('success','This Counter Successfully Delete  !');
 
 
        return redirect()->route('Counters.index');
    }
}
