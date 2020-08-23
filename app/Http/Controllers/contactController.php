<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class contactController extends Controller
{
   

  
    public function store(Request $request)
    {
    	
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['message']=$request->message;
        DB::table('contacts')->insert($data);
        
        return redirect()->back();

    }
            

      
      

    
}
