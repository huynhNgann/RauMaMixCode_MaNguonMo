<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\AccountController;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id=Session::get('id');
        if($admin_id){
            Redirect::to('admin.dashboard');
        }else{
            Redirect::to('admin')->send();
        }
    }
   public function index(){
     
       return view('admin.login');
   }
   public function show_dashboard()
   {
    $this->AuthLogin();
    return view('admin.dashboard');
    }
    public function login(){
        return view('admin.login');
    }
    public function dashboard(Request $request){
        $email=$request->email;
        $password=md5($request->password);
        $result=DB::table('tbl_admin');
        if($result->where('admin_email',$email)->where('admin_password',$password)->first()){
            
            return view('admin.dashboard');
        }
        else{
        
         return view('admin.login');
            
        }
     

    }
    
    public function logout(){
        // Session::put('name',null);

        // Session::put('id',null);
        return Redirect::to('/admin');
        // $admin_email=$request->admin_email;
        // $admin_password=md5($request->admin_password);
        // $result=DB::table('tbl_admin');
        // if($result->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first()){
        //     return view('admin.dashboard');
        // }
        // else{
        //     return view('admin.login');
        // }
        
    }
    public function admin_home(Request $request)
    {
        # code...
    }
}
