<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counter;
use App\Invoice;
use Session;
use Auth;

class ElectricitysController extends Controller
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
        return view('user.Electricitys.index')->withCounters($counters); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $counter  =Counter::find($id);

        $invoices =Invoice::where('counter_id', '=', $id)->orderBy('id', 'DESC')->get();

        $first    =Invoice::where('counter_id', '=', $id)->latest()->first();


        return view('user.Electricitys.create')->withCounter($counter)->withInvoices($invoices)->withFirst($first); 

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
            //'acount_id'                => 'required|max:255',
            'amount'                   =>'required|max:255',
            'counter_id'           => 'required',
           // 'electrics_code'           => 'required',
           // 'electrics_quantity'       => 'required',
           // 'invoice_date'             => 'required',
           // 'user_id'                  => 'required',
          
       
    ));
   // $invoices =Invoice::find($request->counter_number);
    $invoice = new Invoice ;
    


    //dd($invoices);
    
    $invoice->amount=$request->amount;
    $invoice->counter_id=$request->counter_id;
    $invoice->electrics_code=time()+rand(100,1000);
    $invoice->electrics_quantity=$request->amount;
    // $invoice->invoice_date=time();
    // $invoice->user_id=Auth::user()->id ;
  



    $invoice->save();
     //flash messge

    Session::flash('SUCCESS','DONE BUY Electricity !');

    // redirect
    // return redirect()->route('Electricitys.create',$request->counter_id)->withInvoices($invoices);
    return redirect()->route('Electricitys.create',$request->counter_id);
    

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
        //
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
    }
}
