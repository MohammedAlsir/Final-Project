<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sector_type;
use App\Counter;
use Session;


class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors =Sector_type::all();
        return view('admin.sector_type.index')->withSectors($sectors); 
    }


    public function index_2($id)
    {
          //show All User=>Staff
        
            //Show All Counter In 
          $sector = Sector_type::find($id);
          $counter =Counter::where('sector_type_id', '=', $id)->get();


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
        //
        $this->validate($request , array(
            'sector_type'        => 'required|max:255|unique:sectors_types',
        ));
        //Insert
        $sector = new Sector_type ;
        $sector->sector_type=$request->sector_type;
        $sector->save();
        //flash messge
        Session::flash('SUCCESS','The Sector Type Successfully Save !');
        // redirect
        return redirect()->route('Sector_type.index');
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
          //office by id
         

          $sector =Sector_type::find($id);
          $counters =Counter::where('sector_type_id', '=', $id)->get();

          return view('admin.sector_type.show')
          ->withSector($sector)
          ->withCounters($counters); 
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
        //
         //Get Data
         $sector = Sector_type::find($id);
         //validate
         $this->validate($request , array(
            'sector_type'        => 'required|max:255|unique:sectors_types',        
       ));
        //Save data
        $sector->sector_type=$request->input('sector_type');
        $sector->save();
        //flash messge
        Session::flash('success','The Sector Type Successfully Edit !');
        // redirect
        return redirect()->route('Sector_type.index');
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
        $sector = Sector_type::find($id);
        // $counter->tags()->detach();
       
        if( $sector->counters()->count()!=0)
        {
                Session::flash('error','This Sector Type cannot be deleted because it contains Counters !');
                return redirect()->route('Sector_type.index');

        }
        else
        {
        $sector->delete();
         Session::flash('SUCCESS','This Sector Type Successfully Delete  !');
         return redirect()->route('Sector_type.index');

 
        }
 
    }
}
