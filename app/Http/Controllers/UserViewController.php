<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserViewController extends Controller
{
    //

    public function home(){
        Auth::guard('web');
        if(auth()->id()){
            return view('user.home');
        }else{
            return view('user.login');
        }
       
    }
    
    public function news(){
       
        Auth::guard('web');
        if(auth()->id()){
            return view('user.news');
        }else{
            return view('user.login');
        }
    }
    public function news_detials(){
        
        Auth::guard('web');
        if(auth()->id()){
            return view('user.news_details');
        }else{
            return view('user.login');
        }
    }
    public function events(){
        
        Auth::guard('web');
        if(auth()->id()){
            return view('user.events');
        }else{
            return view('user.login');
        }
    }
    public function compititions(){
       
        Auth::guard('web');
        if(auth()->id()){
            return view('user.competitions');
        }else{
            return view('user.login');
        }
    }
    public function ammouncement(){
       
        Auth::guard('web');
        if(auth()->id()){
            return view('user.announcement');
        }else{
            return view('user.login');
        }
    }
    public function contact(){
       
        Auth::guard('web');
        if(auth()->id()){
            return view('user.contact');
        }else{
            return view('user.login');
        }
    }
    public function videos(){
        
        Auth::guard('web');
        if(auth()->id()){
            return view('user.videos');
        }else{
            return view('user.login');
        }
    }
}
