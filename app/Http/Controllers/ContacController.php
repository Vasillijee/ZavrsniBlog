<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContacController extends Controller
{
    public function sendEmail(Request $request){

        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'message'=>$req->message
        ];
        Mail::to('receiver@gmail.com')->send(new ContactMail($data));

        return "Thank you for reaching data";

    }
}
