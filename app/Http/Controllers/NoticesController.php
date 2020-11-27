<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counter;
use App\Notice;
use App\Notice_type;
use Session;

class NoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices =Notice::all();

        return view('user.notices.index')->withNotices($notices); 

    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counters =Counter::all();
        $noticeTypes =Notice_type::all();
        //dd($counters);
        return view('user.notices.create')->withCounters($counters)->withNoticeTypes($noticeTypes); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
         //Validate
         $this->validate($request , array(
            // 'notice'           => 'required',
            // 'notice_type'          =>'required|max:255|',
            'counter_id'          =>'max:255|',
            'notice_state'          =>'max:255|',
            'notice_type_id'          =>'max:255|',
          
       
    ));


    $notice = new Notice ;

    $notice->counter_id=$request->counter_id;
    $notice->notes=$request->notice;
    // $notice->notice_type=$request->notice_type;
    $notice->notice_state=$request->notice_state;
    $notice->measures=$request->procedure;
    $notice->notice_type_id=$request->notice_type_id;
    $notice->user_id=$request->user_id;

    $notice->office_id=$request->office_id;

 
    
   



    $notice->save();
     //flash messge

    Session::flash('SUCCESS','DONE ADD NEW NOTICE !');

    // redirect
    return redirect()->route('Notices.show',$notice->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::find($id);
        $noticeTypes =Notice_type::all();
        return view('user.notices.show')->withNotice($notice)->withNoticeTypes($noticeTypes); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $notice = Notice::find($id);
        // return view('user.notices.edit')->withNotice($notice);
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
        //find 
        $notice = Notice::find($id);

        //validation
        $this->validate($request , array(
            
            'notice_type_id'          =>'required|max:255|',
            'counter_id'          =>'max:255|',
            'notice_state'          =>'max:255|',
          
       
    ));

    // $notice->counter_id=$request->input('counter_id');
    $notice->notes=$request->input('notice');
    $notice->notice_type_id=$request->input('notice_type_id');
    // $notice->notice_state=$request->input('notice_state');
    // $notice->procedure=$request->input('procedure');

 
    
   



    $notice->save();
     //flash messge

    Session::flash('SUCCESS','DONE EDIT  NOTICE !');

    // redirect
    return redirect()->route('Notices.show',$notice->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
 
        Session::flash('SUCCESS','This Notice Successfully Delete  !');
 
 
        return redirect()->route('Notices.index');
    }
}
