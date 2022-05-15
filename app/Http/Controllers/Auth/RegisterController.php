<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\RegistrationModel;
use Illuminate\Http\Request;
use Socialite;
use Session;

class RegisterController extends Controller
{
    public function guser($name,$email)
    {
        $array=[
            'name'=>$name,
            'email'=>$email,
        ];
        return view('registerb',['name'=>$name,'email'=>$email]);
    }
    public  function index()
    {
    
        return view('registernew');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();

    }
    public function saveUser(Request $request)
    {
        
       
        $user= new RegistrationModel();
        $name=$request->fname." ".$request->lname;
        $user->name=$name;
        $user->user_id=uniqid();
        $user->eincome=$request->eincome; 
        $user->eoccupation=$request->eoccupation; 
        $user->efamilytype=$request->efamilytype; 
        $user->emanglik=$request->emanglik; 
        $user->email=$request->email; 
        $user->password=$request->password; 
        $user->dob=$request->dob; 
        $user->gender=$request->gender; 
        $user->income=$request->income; 
        $user->occupation=$request->occupation; 
        $user->ftype=$request->familytype; 
        $user->manglik=$request->manglik;
        $result=$user->save();
        if($result)
        {
            return redirect()->route('loginpage')->with('success',"registration successfull");
        } 
        else
        {
            echo "registration not successfull";
        }
    }
    public function savegUser(Request $request)
    {
        
      
        $user= new RegistrationModel();
        $user->name=$request->name;
        $user->user_id=uniqid();
        $user->email=$request->email; 
        $user->password=$request->password; 
        $user->dob=$request->dob; 
        $user->gender=$request->gender; 
        $user->income=$request->income; 
        $user->eincome=$request->eincome; 
        $user->eoccupation=$request->eoccupation; 
        $user->efamilytype=$request->efamilytype; 
        $user->emanglik=$request->emanglik; 
        $user->occupation=$request->occupation; 
        $user->ftype=$request->familytype; 
        $user->manglik=$request->manglik;
        $result=$user->save();
        if($result)
        {
            return redirect()->route('loginpage')->with('success',"registration successfull");
        } 
        else
        {
            echo "registration not successfull";
        }
    }
    public function registerprocess($userId)
    {
     $user= UserModel::where('user_id',$userId)->first();
     $name=$user->name;
     $email=$user->email;
     return redirect()->route('guserRegistration',['name'=>$name,'email'=>$email]);
    }
    public function GoogleLogin()
    {
        $user= Socialite::driver('google')->user();
        $data= new UserModel();
     
        $email=$user->email;
        $exist=UserModel::where('email',$email)->first();
        $emailfind=RegistrationModel::where('email',$email)->first();
        if($exist== "")
        {
            $data->email=$email;
            $data->name=$user->name;
            $userId=$data->user_id=uniqid();
            $data->save();
            return redirect()->route('registerprocess',$userId)->with('fail',"Complete Registration First");
        }
        else
        {

            if(!empty($emailfind))
            {
                return redirect()->route('userprofile',$email);
            }
            else
            {
                return redirect()->route('register');
            }
        }
        
            
           
    }
}
