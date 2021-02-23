<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller {
   public function basic_email(Request $request) {
      $data = array('name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'subject'=>$request->subject,
      'comment'=>$request->comment);
  
      Mail::to('chandrakantaharansingh.0@gmail.com')->send(new \App\Mail\Mailer($data));
      return redirect()->back()->with(['success' => 'Your details has been submitted admin will contact you soon.']);
   }

}