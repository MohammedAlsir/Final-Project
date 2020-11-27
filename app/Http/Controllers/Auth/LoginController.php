<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    // $redirectTo الدالة هنا بدلا من المتغير 
    protected function redirectTo()
    {
        if(Auth::user()->level == 1)
            {
                // return redirect('admin');
                //return the route for admin
                return 'admin';
            } 
            elseif(Auth::user()->level == 2 && Auth::user()->state =='Active')
            {
                // return redirect('user');  
                //return the route for user  
                return 'user';    
            }
            else
            //for any error 
            { abort(404); }
          
    }

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
