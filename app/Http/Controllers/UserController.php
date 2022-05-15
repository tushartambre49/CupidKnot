<?php

namespace App\Http\Controllers;
use App\Models\RegistrationModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userpro($email)
    {
    
        $deta=RegistrationModel::orderBy('id','DESC')->where('email',$email)->first();
        

    
        if($deta->gender=="female")
        {
            $data=RegistrationModel::where('gender','male')->get();
            $dataArray = (array) $data;
            $percentage=0;
          
        
            foreach($data as $comp)
            {
                if(strlen($deta->income)==$comp->eincome)
                {
                    $percentage+=25;
                  
                }
                if($deta->occupation==$comp->eoccupation)
                {
                    $percentage+=25;
                 
                }
                if($deta->ftype==$comp->efamilytype)
                {
                    $percentage+=25;
                 
                }
                if($deta->manglik==$comp->emanglik)
                {
                    $percentage+=25;
                
                }
            
             $information[]=
             [
                 'name'=>$comp->name,
                 'dob'=>$comp->dob,
                 'manglik'=>$comp->manglik,
                 'occupation'=>$comp->occupation,
                 'percentage'=>$percentage,
             ];
                
               
            }
            

           
       
            
            return view('userpro',array("new"=>$information,"deta"=>$deta));
            // return View::make('userpro', ['new' > $new,'deta'=>$deta]);

        
            
        }
        else
        {
            $data=RegistrationModel::orderBy('id','DESC')->where('gender','female')->get();
          
            $dataArray = (array) $data;
            $percentage=0;
            
            foreach($data as $comp)
            {
            
            if(strlen($deta->income)==$comp->eincome)
            {
                $percentage+=25;
               
            }
            if($deta->occupation==$comp->eoccupation)
            {
                $percentage+=25;
            
            }
            if($deta->ftype==$comp->efamilytype)
            {
                $percentage+=25;
             
            }
            if($deta->manglik==$comp->emanglik)
            {
                $percentage+=25;
             
            }
            
            $information[]=
             [
                 'name'=>$comp->name,
                 'dob'=>$comp->dob,
                 'manglik'=>$comp->manglik,
                 'occupation'=>$comp->occupation,
                 'percentage'=>$percentage,
             ];
           
        
        }
    
         
         

            
            return view('userpro',array("new"=>$information,"deta"=>$deta));
    
        
        
            
        }

       
       
        
    }
}
