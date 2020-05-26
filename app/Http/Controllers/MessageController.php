<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //

    public function store(Request $request)
    {
         request(validate(
           
             [
            'name'=> 'required',
            'email'=> 'required|email',
            'subject'=> 'required',
            'content'=> 'required|min:3'
        ],[
            'name.required'=> __('Necesito tu nombre')
        ])   
        );
    

    }


}
