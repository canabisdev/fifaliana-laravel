<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    
    public function login(Request $request)
    {
        $email=$request->email;
      $password=$request->password;
      $result =DB::table('users')
      ->where('email', $email)
      ->where('password',$password)
      ->first();

       if ($result){
           Session::put('id', $result->email);
           Session::put('id', $result->id);
           return Redirect::to('/admin.home');
       }
       else {
           Session::put('exception','Email ou Mots de passe incorrecte');
           return Redirect::to('/admin.login');
       }

    }

}
