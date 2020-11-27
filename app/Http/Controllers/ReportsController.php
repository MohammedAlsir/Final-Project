<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Office;
use App\Counter;
use App\Notice;
use App\Notice_type;
use App\Invoice;
use App\Sector_type;
use Carbon\Carbon as time;
use Carbon\Carbon;
use DB;
class ReportsController extends Controller
{
    //Report for Staffs 
    public function Staffs()
    {
        $from = 1;
        $to = 1;
        $i=1;
        $staffs =User::all();
        $countstaffs =User::where('level', '=', 2)
        // ->where('created_at','=',)
        ->get();
        $active =User::where('level', '=', 2)->where('state','=','Active')->get();
        $nonactive =User::where('level', '=', 2)->where('state','=','Non Active')->get();

        return view('admin.report.index')
        ->withstaffs($staffs)
        ->withCountstaffs($countstaffs)
        ->withActive($active)
        ->withFrom($from)
        ->withTo($to)
        ->withI($i)
        ->withNonactive($nonactive);
    
    }

    public function Staffs2($type,Request $request)
    {
        $to = time::today()->format('Y-m-d');
        $from;
        $i =0;
        switch ($type ){
            case 'Today':
                $from = time::today()->format('Y-m-d');
                // 19-10-2020
                // 19-10-2020
                break;
            case 'Yesterday':
                $from = date('Y-m-d',strtotime("-1 days"));
                // 18-10-2020
                //19-10-2020
                break;
            case 'Last 7 Days':
                $from = time::now()->subDays(6)->format('Y-m-d');
                // 12-10-2020
                //19-10-2020
                break;  
            case 'Last 30 Days':
                $from = time::now()->subDays(30)->format('Y-m-d');
                // 19-09-2020
                //19-10-2020
                break;  
            case 'This Month':
                $from = time::today()->format('Y-m-1');
                // 1-10-2020
                //19-10-2020
                break;  
            case 'Year':
                $from = time::now()->subYears(1)->format('Y-m-d');
                break;
            case 'rang':
                $from = $request->from;
                $to = $request->to;
                break;
              
            default:
                $from = time::today()->format('Y-m-d');
                break;
        }
        // *********************************************************************************//
        // *********************************************************************************//
        //====================================Start=========================================//
        // *********************************************************************************//
        // *********************************************************************************//
        $staffs =User::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        // $staffs =User::whereBetween('created_at',[$to,$today])->get();
        $countstaffs =User::where('level', '=', 2)->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        $active =User::where('level', '=', 2)->where('state','=','Active')->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        $nonactive =User::where('level', '=', 2)->where('state','=','Non Active')->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        // *********************************************************************************//
        // *********************************************************************************//
        //======================================End=========================================//
        // *********************************************************************************//
        // *********************************************************************************//



        return view('admin.report.index')
        ->withstaffs($staffs)
        ->withCountstaffs($countstaffs)
        ->withActive($active)
        ->withNonactive($nonactive)
        ->withFrom($from) 
        ->withI($i)
        ->withTo($to); 
    }


    //Report for Maintenance 
    public function Maintenance()
    {
        $from = 1;
        $to = 1;
        $maintenances =User::all();
        $countmaintenances =User::where('level', '=', 3)->get();

        $active =User::where('level', '=', 3)->where('state','=','Active')->get();
        $nonactive =User::where('level', '=', 3)->where('state','=','Non Active')->get();

        return view('admin.report.maintenance')
        ->withMaintenances($maintenances)
        ->withCountmaintenances($countmaintenances)
        ->withActive($active)
        ->withNonactive($nonactive) 
        ->withFrom($from)
        ->withTo($to); 
   
        
    }
    // Report For Maintenenance
    public function Maintenance2($type,Request $request)
    {
        $to = time::today()->format('Y-m-d');
        $from;
        switch ($type ){
            case 'Today':
                $from = time::today()->format('Y-m-d');
                // 19-10-2020
                // 19-10-2020
                break;
            case 'Yesterday':
                $from = date('Y-m-d',strtotime("-1 days"));
                // 18-10-2020
                //19-10-2020
                break;
            case 'Last 7 Days':
                $from = time::now()->subDays(6)->format('Y-m-d');
                // 12-10-2020
                //19-10-2020
                break;  
            case 'Last 30 Days':
                $from = time::now()->subDays(30)->format('Y-m-d');
                // 19-09-2020
                //19-10-2020
                break;  
            case 'This Month':
                $from = time::today()->format('Y-m-1');
                // 1-10-2020
                //19-10-2020
                break;  
            case 'Year':
                $from = time::now()->subYears(1)->format('Y-m-d');
                break;
            case 'rang':
                $from = $request->from;
                $to = $request->to;
                break;
              
            default:
                $from = time::today()->format('Y-m-d');
                break;
        }

        $maintenances =User::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        $countmaintenances =User::where('level', '=', 3)->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();

        $active =User::where('level', '=', 3)->where('state','=','Active')->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        $nonactive =User::where('level', '=', 3)->where('state','=','Non Active')->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();

        return view('admin.report.maintenance')
        ->withMaintenances($maintenances)
        ->withCountmaintenances($countmaintenances)
        ->withActive($active)
        ->withNonactive($nonactive)
        ->withFrom($from) 
        ->withTo($to); 
   
        
    }
    //Report for Offices
    public function Offices()
    {
        $from = 1;
        $to = 1;
        $offices = Office::all();
        $users =User::where('level', '!=', 1);

        // $user =User::all();
        // $users = $user->office()->select('office.*','count(office.id) AS fff')>get();
        return view('admin.report.office')
        ->withOffices($offices)
        ->withUsers($users)
        ->withFrom($from)
        ->withTo($to);
    }
    // Report For Offices
    public function Offices2($type,Request $request)
    {
        $to = time::today()->format('Y-m-d');
        $from;
        switch ($type ){
            case 'Today':
                $from = time::today()->format('Y-m-d');
                // 19-10-2020
                // 19-10-2020
                break;
            case 'Yesterday':
                $from = date('Y-m-d',strtotime("-1 days"));
                // 18-10-2020
                //19-10-2020
                break;
            case 'Last 7 Days':
                $from = time::now()->subDays(6)->format('Y-m-d');
                // 12-10-2020
                //19-10-2020
                break;  
            case 'Last 30 Days':
                $from = time::now()->subDays(30)->format('Y-m-d');
                // 19-09-2020
                //19-10-2020
                break;  
            case 'This Month':
                $from = time::today()->format('Y-m-1');
                // 1-10-2020
                //19-10-2020
                break;  
            case 'Year':
                $from = time::now()->subYears(1)->format('Y-m-d');
                break;
              
            case 'rang':
                $from = $request->from;
                $to = $request->to;
                break;
            default:
                $from = time::today()->format('Y-m-d');
                break;
        }
        
        $offices = Office::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        
        foreach($offices as $office)
        {
            $test[] = $office->id;
        }
       
        if(!empty($test)){
            $users =User::where('level', '!=', 1)->whereIn('office_id',$test)->get();
        }else{$users =User::where('level', '!=', 1)->where('office_id','=','85320dgfjg')->get();}




        

        return view('admin.report.office')
        ->withOffices($offices)
        ->withUsers($users)
        ->withFrom($from)
        ->withTo($to);
    }
    //Report for Counters
    public function Counters()
    {
        $from = 1;
        $to = 1;
        $counters = Counter::all();
        $sectors = Sector_type::all();
        return view('admin.report.counter')
        ->withFrom($from)
        ->withTo($to)
        ->withSectors($sectors)
        ->withCounters($counters);
    }
    //Report For Counter
    public function Counters2($type,Request $request)
    {
        $to = time::today()->format('Y-m-d');
        $from;
        switch ($type ){
            case 'Today':
                $from = time::today()->format('Y-m-d');
                // 19-10-2020
                // 19-10-2020
                break;
            case 'Yesterday':
                $from = date('Y-m-d',strtotime("-1 days"));
                // 18-10-2020
                //19-10-2020
                break;
            case 'Last 7 Days':
                $from = time::now()->subDays(6)->format('Y-m-d');
                // 12-10-2020
                //19-10-2020
                break;  
            case 'Last 30 Days':
                $from = time::now()->subDays(30)->format('Y-m-d');
                // 19-09-2020
                //19-10-2020
                break;  
            case 'This Month':
                $from = time::today()->format('Y-m-1');
                // 1-10-2020
                //19-10-2020
                break;  
            case 'Year':
                $from = time::now()->subYears(1)->format('Y-m-d');
                break;
            case 'rang':
                $from = $request->from;
                $to = $request->to;
                break;
              
            default:
                $from = time::today()->format('Y-m-d');
                break;
        }
       
        
        $counters = Counter::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        $sectors = Sector_type::all();
        return view('admin.report.counter')
        ->withCounters($counters)
        ->withFrom($from)
        ->withSectors($sectors)
        ->withTo($to);
    }
    //Report for Notices
    public function Notices()
    {
        $test2 ="no";    
        $from = 1;
        $to = 1;

        // $from2 = time::today()->format('Y-m-d');
        // $to2 = time::today()->format('Y-m-d');
        $notices = Notice::all();
        $noticeTypes = Notice_type::all();
        
        
        return view('admin.report.notice')
        ->withNotices($notices)
        ->withnoticeTypes($noticeTypes)
        ->withFrom($from)
        ->withTo($to)
        ->withTest2($test2);
    }
    public function Notices2($type,Request $request)
    {   $test2 =$type; 
        $to = time::today()->format('Y-m-d');
        $from;
        
        switch ($type ){
            case 'Today':
                $from = time::today()->format('Y-m-d');
                // 19-10-2020
                // 19-10-2020
                break;
            case 'Yesterday':
                $from = date('Y-m-d',strtotime("-1 days"));
                // 18-10-2020
                //19-10-2020
                break;
            case 'Last 7 Days':
                $from = time::now()->subDays(6)->format('Y-m-d');
                // 12-10-2020
                //19-10-2020
                break;  
            case 'Last 30 Days':
                $from = time::now()->subDays(30)->format('Y-m-d');
                // 19-09-2020
                //19-10-2020
                break;  
            case 'This Month':
                $from = time::today()->format('Y-m-1');
                // 1-10-2020
                //19-10-2020
                break;  
            case 'Year':
                $from = time::now()->subYears(1)->format('Y-m-d');
                break;
            case 'rang':
                $from = $request->from;
                $to = $request->to;
                break;
            default:
                $from = time::today()->format('Y-m-d');
                break;
        }
       
        $notices = Notice::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
        foreach($notices as $notice)
        {
            $test[] = $notice->notice_type_id;
        }
        
        if(!empty($test))
        {
            $noticeTypes = Notice_type::whereIn('id',$test)->get();

        }else{$noticeTypes = Notice_type::where('id','=','gggg')->get();}

        
        return view('admin.report.notice')
        ->withNotices($notices)
        ->withnoticeTypes($noticeTypes)
        ->withFrom($from)
        ->withTo($to)
        ->withType($type)
        ->withTest2($test2);
    }
    //Report for Invoices
    public function Invoices()
    {
        $from = 1;
        $to = 1;

       

        $invoices = Invoice::all();
        $invoiceschar = Invoice::whereYear('created_at', Carbon::now()->year)
        ->select(DB::raw('count(id) as total'), DB::raw('MONTH(created_at) as month'))
        ->groupBy('month')
        ->get();
        //===============================================================================================//
       //===============================================================================================//
       //===============================================================================================//
       //===============================================================================================//


        $a=[0,0,0,0,0,0,0,0,0,0,0,0];

        foreach ($invoiceschar as $item){
               $item->month;
               $item->total;
               $a[$item->month-1] =$item->total;
        }
        $noticeTypes = Notice_type::all();
        return view('admin.report.invoice')
        ->withFrom($from)
        ->withTo($to)
        ->withA($a)
        ->withInvoices($invoices);
    }
    // Report For Invoices
    public function Invoices2($type,Request $request)
    {    
        $to = time::today()->format('Y-m-d');
        $from; 
        switch ($type ){
            case 'Today':
                $from = time::today()->format('Y-m-d');
                // 19-10-2020
                // 19-10-2020
                break;
            case 'Yesterday':
                $from = date('Y-m-d',strtotime("-1 days"));
                // 18-10-2020
                //19-10-2020
                break;
            case 'Last 7 Days':
                $from = time::now()->subDays(6)->format('Y-m-d');
                // 12-10-2020
                //19-10-2020
                break;  
            case 'Last 30 Days':
                $from = time::now()->subDays(30)->format('Y-m-d');
                // 19-09-2020
                //19-10-2020
                break;  
            case 'This Month':
                $from = time::today()->format('Y-m-1');
                // 1-10-2020
                //19-10-2020
                break;  
            case 'Year':
                $from = time::now()->subYears(1)->format('Y-m-d');
                break;

            case 'rang':
                $from = $request->from;
                $to = $request->to;
                break;
            
            default:
            $from = time::today()->format('Y-m-d');
            break;
        }
   

        $invoices = Invoice::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();;
       //===============================================================================================//
       //===============================================================================================//
       //===============================================================================================//
       //===============================================================================================//
        $invoiceschar = Invoice::whereYear('created_at', Carbon::now()->year)
        ->select(DB::raw('count(id) as total'), DB::raw('MONTH(created_at) as month'))
        ->groupBy('month')
        ->get();
        //===============================================================================================//
       //===============================================================================================//
       //===============================================================================================//
       //===============================================================================================//


        $a=[0,0,0,0,0,0,0,0,0,0,0,0];

        foreach ($invoiceschar as $item){
               $item->month;
               $item->total;
               $a[$item->month-1] =$item->total;
        }
        return view('admin.report.invoice')
        ->withFrom($from)
        ->withTo($to)
        ->withA($a)
        ->withInvoices($invoices);
    }
}
