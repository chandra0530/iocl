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
  
      Mail::to('tapankp@indianoil.in')->send(new \App\Mail\Mailer($data));
      return redirect()->back()->with(['success' => 'Thank you for submitting your query. Someone from our team will respond to you shortly']);
   }

}