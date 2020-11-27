<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //  protected $redirectTo = '/home';
     protected function redirectTo()
     {
         if(Auth::user()->level == 1)
             {
                 // return redirect('admin');
                 //return the route for admin
                 return 'admin';
             } 
             elseif(Auth::user()->level == 2)
             {
                 // return redirect('user');  
                 //return the route for user  
                 return 'user';    
             }
             else
             //for any error 
             abort(404);
     }
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            // 'phone_number' => ['required', 'string', 'max:10', 'min:10'],
            // 'state' => ['required', 'string', 'max:255'],
            // 'office' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'level' => $data['level'],
            'email' => $data['email'],
            // 'phone_number' => NULL,
            // 'state' => NULL,
            // 'office' => $data['office'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
}
