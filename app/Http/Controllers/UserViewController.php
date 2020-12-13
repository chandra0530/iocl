<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Models\Announcement;
use App\Models\Compitition;
use App\Models\Event;
use App\Models\Gallery;
Use App\Models\News;
use App\Models\news_comment;
use App\Models\event_comment;
use App\Models\competition_comment;
use App\Models\gallery_comment;
use App\Models\AnnouncementComment;
use App\Models\news_like;
use App\Models\event_like;
use App\Models\competition_like;
use App\Models\AnnouncementLike;
use Carbon\Carbon;
use App\Models\User;
use App\Models\CompotitionUserUploads;
class UserViewController extends Controller
{
    //

    public function home(){


        $announcement=Announcement::where('status','active')->inRandomOrder()->limit(5)->get();
        $compitition=Compitition::where('status','active')->inRandomOrder()->limit(6)->get();
        $event=Event::where('status','active')->inRandomOrder()->limit(3)->get();
        $gallery=Gallery::where('status','active')->inRandomOrder()->limit(3)->get();
        $news=News::where('news_status','active')->inRandomOrder()->limit(3)->get();
        Auth::guard('web');
        if(auth()->id()){
            return view('user.home',compact('announcement','compitition','event','gallery','news'));
        }else{
            return view('user.login');
        }
       
    }
    
    public function news(){
       
        Auth::guard('web');
        if(auth()->id()){
            $news=News::where('news_status','active')->get();
            $left=[];
        $right=[];
        for ($i=0; $i <sizeof($news) ; $i++) { 
            if(($i%2)==0){
                array_push($left,$news[$i]);
            }
            else{
                array_push($right,$news[$i]);
            }
            
        }
            return view('user.news',compact('news','right','left'));
        }else{
            return view('user.login');
        }
    }
    public function news_detials($id){
        
        Auth::guard('web');
        if(auth()->id()){
            $news_details=News::find($id);
            $like_status=news_like::where('news_id',$id)->where('user_id',auth()->id())->get();
            $comments=news_comment::where('news_id',$id)
            ->join('users','users.id','=','news_comments.user_id')
            ->get();
            return view('user.news_details',compact('news_details','comments','like_status'));
        }else{
            return view('user.login');
        }
    }
    public function event_detials($id){
        Auth::guard('web');
        if(auth()->id()){
            $event_details=Event::find($id);
            $like_status=event_like::where('event_id',$id)->where('user_id',auth()->id())->get();
            $comments=event_comment::where('event_id',$id)
            ->join('users','users.id','=','event_comments.user_id')
            ->get();
            return view('user.event_details',compact('event_details','comments','like_status'));
            // return view('user.news_details');
        }else{
            return view('user.login');
        }

    }
    public function events(){
        
        Auth::guard('web');
        if(auth()->id()){
            $event=Event::where('status','active')->get();
            return view('user.events',compact('event'));
        }else{
            return view('user.login');
        }
    }
    public function compititions(){
       
        Auth::guard('web');
        if(auth()->id()){
            $comp=Compitition::whereDate('event_from', '=', Carbon::now()->toDateString())->where('status','active')->get();
            $upcomingcomp=Compitition::whereDate('event_from', '>=', Carbon::now()->toDateString())->where('status','active')->get();
            $pastcomp=Compitition::whereDate('event_from', '<', Carbon::now()->toDateString())->where('status','active')->get();
            $competitions=Compitition::whereDate('event_from', '>=', Carbon::now()->toDateString())->where('status','active')->get();
            return view('user.competitions',compact('comp','upcomingcomp','pastcomp','competitions'));
        }else{
            return view('user.login');
        }
    }
    public function ammouncement(){
       
        Auth::guard('web');
        if(auth()->id()){
            $announcement=Announcement::where('status','active')->get();
            return view('user.announcement',compact('announcement'));
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
    public function compotition_details($id){
        $comp_details=Compitition::find($id);
        $like_status=competition_like::where('competition_id',$id)->where('user_id',auth()->id())->get();
        $user_uploads=CompotitionUserUploads::where('comp_id',$id)
        ->join('users','users.id','=','compotition_user_uploads.user_id')
        ->select('compotition_user_uploads.*','users.name as user_name')
        ->get();
        $comments=competition_comment::where('competition_id',$id)
        ->join('users','users.id','=','competition_comments.user_id')
        ->get();
        return view('user.compititon_details',compact('comp_details','comments','like_status','user_uploads'));
    }
    public function gallery_details($id){
        $gallery=Gallery::find($id);
        $comments=gallery_comment::where('gallery_id',$id)
        ->join('users','users.id','=','gallery_comments.user_id')
        ->get();
        return view('user.gallery_details',compact('gallery','comments'));
    }
    public function announcement_details($id){
        $announcement=Announcement::find($id);
        $like_status=AnnouncementLike::where('announcement_id',$id)->where('user_id',auth()->id())->get();
        $comments=AnnouncementComment::where('announcement_id',$id)
        ->join('users','users.id','=','announcement_comments.user_id')
        ->get();
        return view('user.announcement_details',compact('announcement','comments','like_status'));
    }
    public function login(){
        return view('user.login');
    }
    public function signup(){
        return view('user.signup');
    }
    public function profile(){
        $user_details=User::find(auth()->id());
        // return $user_details;
        return view('user.profile',compact('user_details'));
    }
    public function updateprofile(Request $request){
        // return $request;
        $user_details=User::find(auth()->id());
        $user_details->phone_number=$request->mobile_no;
        $user_details->spouce_name=$request->spouce_name;
        $user_details->spouce_email=$request->spouce_email;
        $user_details->child_name=implode('>>',$request->child_name);
        $user_details->child_email=implode('>>',$request->child_email);
        if($request->password){
            $user_details->password=$request->password;
        }
        $user_details->save();
        return redirect()->back()->with(['success' => 'User profile details updated successfully']);
    }
}
