<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice_type;
use App\Notice;
use Session;


class Notice_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types =Notice_type::all();
        //dd($notice_types);
        return view('admin.notice_type.index')->withTypes($types); 
    }


    public function index_2($id)
    {
          //show All User=>Staff
          $type = Notice_type::find($id);
          $notices =Notice::where('notice_type_id', '=', $id)->get();


          return view('admin.notice_type.index_2')->withNotices($notices)->withType($type); 
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
            'name'        => 'required|max:255',
           
            
        ));

        //Insert

        $type = new Notice_type ;

        $type->Notice_type=$request->name;
      
  

        $type->save();

        //flash messge

        Session::flash('SUCCESS','The type Successfully Save !');

        // redirect
        return redirect()->route('Notice_type.index');
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
        $type = Notice_type::find($id);
        $this->validate($request , array(
            'name'        => 'required|max:255',
           
            
        ));

        //Insert


        $type->Notice_type=$request->input('name');
      
  

        $type->save();

        //flash messge

        Session::flash('success','The type Successfully Edit !');

        // redirect
        return redirect()->route('Notice_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice_type = Notice_type::find($id);
        $notice_type->delete();
 
        Session::flash('SUCCESS','This Notice Type Successfully Delete  !');
 
 
        return redirect()->route('Notice_type.index');
    }



    public function destroy_notice($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
 
        Session::flash('SUCCESS','This Notice Successfully Delete  !');
 
 
        return redirect()->route('Notice_type.index_2',$notice->notice_type_id);
    }
}
