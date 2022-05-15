<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel;
use DB;
use App\Models\RegistrationModel;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
     return view('alogin');
    }
    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect()->route('alogin');
    }
    public function filter($status)
    {
        
        $data =RegistrationModel::where('manglik',$status)->get();
        return view('admindashboard',compact('data'));

    }
    public function dashboard()
    {
        $users = DB::select('select * from users');
     
    
      
        return view('admindashboard',compact('users'));
    }
    public function login(Request $request)
    {
        $credentials = $request->except(['_token']);

        $user = AdminModel::where('email',$request->email)->first();
         if($user== "")
         {
           return redirect()->route('alogin')->with('fail',"email not found please register");
             
         }
         else{
            if ($request->password==$user->password && $request->email==$user->email) 
            {
                // echo "login successfull";
                $email=$request->email;
                $name=$request->name;
                session()->put('name',$name);
                return redirect()->route('admindashboard')->with('success',"Login Successfull");
            }
            else
            {
                return redirect()->route('alogin')->with('fail',"Invalid Credentials");
            }
   
        }
}
}
