<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        if($id == Auth::user()->id)
        {
            return view('admin.profile.index')->withUser($user);
        }else{
            return view('partials.error');

        }
        
    }

    public function index_user($id)
    {
        $user = User::find($id);
        

        if($id == Auth::user()->id)
        {
            return view('user.profile.index')->withUser($user);
        }else{
            return view('partials.error');

        }
    }

    public function update(Request $request, $id)
    {
        //
         //Get Data
         $user = User::find($id);
         
         if($id == Auth::user()->id)
        {
             //validate
         $this->validate($request , array(
            'name'           => 'required|max:255',
            'email'          =>'required|max:255|email',
            'phone_number'   => 'required|max:10|min:10',
            'password'   => 'required|max:20|min:7',

       ));


       //Save data
       $user->name=$request->input('name');
       $user->email=$request->input('email');
       $user->phone_number=$request->input('phone_number');
       
       $user->password=Hash::make($request->input('password'));

      
       $user->save();

         //flash messge
        Session::flash('success','Done Edite Your Profile !');

        // redirect
        return redirect()->route('admin');
       
        }// end if
        else{return view('partials.error');}


        

    }


    public function update_user(Request $request, $id)
    {
        //
         //Get Data
         $user = User::find($id);

         if($id == Auth::user()->id)
        {
             //validate
         $this->validate($request , array(
            'name'           => 'required|max:255',
            'email'          =>'required|max:255|email',
            'phone_number'   => 'required|max:10|min:10',
            'password'   => 'required|max:20|min:7',

       ));


       //Save data
       $user->name=$request->input('name');
       $user->email=$request->input('email');
       $user->phone_number=$request->input('phone_number');
       
       $user->password=Hash::make($request->input('password'));

      
       $user->save();

         //flash messge
        Session::flash('success','Done Edite Your Profile !');

        // redirect
        return redirect()->route('user');
        }//end if

        else{return view('partials.error');}


        
       

    }//end function

}
