<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\MyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends OsnovniController
{
    public function index(){
        return view('front.pages.contact',$this->data);
    }

    public function sendMail(MailRequest $request){

        $data=[
            'fullname'=>$request->fullname,
            'mail'=>$request->mail,
            'subject'=>$request->subject,
            'message'=>$request->message
        ];

//        $fullname=$request->fullname;
//        $email=$request->email;
//        $subject=$request->subject;
//        $message=$request->message;

        Mail::to('atisdale788@gmail.com')->send(new MyMail($data));
        return back()->with('success','Message sent!');

    }
}
