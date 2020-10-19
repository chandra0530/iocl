<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Models\Announcement;
use App\Models\Compitition;
use App\Models\Event;
use App\Models\Gallery;
Use App\Models\News;

class UserViewController extends Controller
{
    //

    public function home(){


        $announcement=Announcement::inRandomOrder()->limit(3)->get();
        $compitition=Compitition::inRandomOrder()->limit(3)->get();
        $event=Event::inRandomOrder()->limit(1)->get();
        $gallery=Gallery::inRandomOrder()->limit(3)->get();
        $news=News::inRandomOrder()->limit(3)->get();


        // Auth::guard('web');
        // if(auth()->id()){
            return view('user.home',compact('announcement','compitition','event','gallery','news'));
        // }else{
        //     return view('user.login');
        // }
       
    }
    
    public function news(){
       
        // Auth::guard('web');
        // if(auth()->id()){
            $news=News::get();
            return view('user.news',compact('news'));
        // }else{
        //     return view('user.login');
        // }
    }
    public function news_detials($id){
        
        // Auth::guard('web');
        // if(auth()->id()){
            $news_details=News::find($id);
            return view('user.news_details',compact('news_details'));
            // return view('user.news_details');
        // }else{
        //     return view('user.login');
        // }
    }
    public function events(){
        
        // Auth::guard('web');
        // if(auth()->id()){
            $event=Event::get();
            return view('user.events',compact('event'));
        // }else{
        //     return view('user.login');
        // }
    }
    public function compititions(){
       
        // Auth::guard('web');
        // if(auth()->id()){
            $comp=Compitition::get();
            return view('user.competitions',compact('comp'));
        // }else{
        //     return view('user.login');
        // }
    }
    public function ammouncement(){
       
        // Auth::guard('web');
        // if(auth()->id()){
            $announcement=Announcement::get();
            return view('user.announcement',compact('announcement'));
        // }else{
        //     return view('user.login');
        // }
    }
    public function contact(){
       
        // Auth::guard('web');
        // if(auth()->id()){
            return view('user.contact');
        // }else{
        //     return view('user.login');
        // }
    }
    public function videos(){
        
        // Auth::guard('web');
        // if(auth()->id()){
            return view('user.videos');
        // }else{
        //     return view('user.login');
        // }
    }
}
