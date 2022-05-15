<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistrationModel;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function partnerpre()
    {
        return view('partnerpre');
    }
    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect()->route('loginpage');
    }
    public function login(Request $request)
    {
      

        $credentials = $request->except(['_token']);

        $user = RegistrationModel::where('email',$request->email)->first();
         if($user== "")
         {
           return redirect()->route('register')->with('fail',"email not found please register");
             
         }
         else{
            if ($request->password==$user->password && $request->email==$user->email) {

                $email=$request->email;
                $name=$request->name;
                session()->put('name',$name);

       
                return redirect()->route('userprofile',$email)->with('success',"Login Successfull");
    
            }else{
              echo "login unsuccessful";
            }
         }
        
    }
}
