<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AdminController extends Controller
{
    public function admin_dashboard(){
        return view('admin.home');
    }

    public function logout() {
        Session::put('admin_name',null);
        Session::put('admin_id,null');

        return Redirect::to('/backend');
    }

    public function login_dashboard (Request $request)
    {
        $email=$request->admin_email;
        $password=$request->admin_password;
        $result =DB::table('admin_tbl')
        ->where('admin_email', $email)
        ->where('admin_password',$password)
        ->first();
  
         if ($result){
             Session::put('admin_email', $result->admin_email);
             Session::put('admin_id', $result->admin_id);
             return Redirect::to('/admin.home');
         }
         else {
             Session::put('exception','Email ou Mots de passe incorrecte');
             return Redirect::to('/admin/home');
         }
  
       
      
    }
}
