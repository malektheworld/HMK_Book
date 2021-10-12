<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;
use App\Mail\SendMail ;

class SendEmailController extends Controller
{
    //
    public function index () {

        return view('contact') ; 
    }
    public function send(Request $request) {
        $this->validate($request, [
            'name'       => 'required' ,
            'email'    => 'required|email' ,
            'message' =>    'required'
        ]);
        $data = array(
            'name'  => $request->name , 
            'message' => $request->message ,
            'email' => $request->email ,
            'phone' => $request->phone 
            

        ) ; 
        Mail::to('malektheworld@gmail.com')->send(new SendMail($data));
        return redirect('/sendemail')->with('succses' , 'Thanks for contacting us!') ;

    }
   
}
