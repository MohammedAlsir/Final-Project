<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\User;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        //Report No One 
        $active =User::where('level', '=', 2)->where('state','=','Active')->get();
        $nonactive =User::where('level', '=', 2)->where('state','=','Non Active')->get();
        // Report No Two

        $notice = Notice::whereYear('created_at', Carbon::now()->year)
        ->select(DB::raw('MONTH(created_at) as date'))
        ->get();

        // $notice = Notice::whereYear('created_at', Carbon::now()->year)
        // ->whereMonth('created_at','5')
        // ->get();


        // //تقرير حسب الشهر 
        // $notice= Notice::where('created_at', '>', Carbon::now()->startOfMonth())
        //  ->where('created_at', '<', Carbon::now()->endOfMonth())->count();

        $notice = Notice::whereYear('created_at', Carbon::now()->year)
        ->select(DB::raw('count(id) as total'), DB::raw('MONTH(created_at) as month'))
        ->groupBy('month')
        ->get();

         $a=[0,0,0,0,0,0,0,0,0,0,0,0];

         foreach ($notice as $item){
                $item->month;
                $item->total;
                $a[$item->month-1] =$item->total;
         }
        return view('admin.adminhome')
        ->withActive($active)
        ->withNonactive($nonactive)
        ->withNotice($notice)
        ->withA($a);
    }
}
