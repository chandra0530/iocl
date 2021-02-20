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
use Illuminate\Support\Facades\Storage;
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
            $success=0;
            $comp=Compitition::whereDate('event_from', '<', Carbon::now()->toDateString())->whereDate('event_to', '>', Carbon::now()->toDateString())->where('status','active')->orderBy('id', 'desc')->get();
            $upcomingcomp=Compitition::whereDate('event_from', '>=', Carbon::now()->toDateString())->where('status','active')->orderBy('id', 'desc')->get();
            $pastcomp=Compitition::whereDate('event_to', '<', Carbon::now()->toDateString())->where('status','active')->orderBy('id', 'desc')->get();
            $competitions=Compitition::whereDate('event_from', '<', Carbon::now()->toDateString())->whereDate('event_to', '>', Carbon::now()->toDateString())->where('status','active')->orderBy('id', 'desc')->get();
            return view('user.competitions',compact('success','comp','upcomingcomp','pastcomp','competitions'));
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
        ->where('compotition_user_uploads.status','published')
        ->select('compotition_user_uploads.*','users.name as user_name')
        ->get();
        $comments=competition_comment::where('competition_id',$id)
        ->join('users','users.id','=','competition_comments.user_id')
        ->get();
        $total_count = competition_like::where('competition_id',$id)->count();
        return view('user.compititon_details',compact('comp_details','comments','like_status','user_uploads','total_count'));
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
        $family_member_Details=User::where('employe_id',auth()->id())->get();
        return view('user.profile',compact('user_details','family_member_Details'));
    }
    public function updateprofile(Request $request){
        $user_details=User::find(auth()->id());
        if ($request->has('profile_image')) {
            $temp_url = $request->file('profile_image')->store('profile_image', 'public');
           
            $user_details->profile_image = url(Storage::url($temp_url));
        }
        $user_details->phone_number=$request->mobile_no;
        if($request->password){
            $user_details->password=$request->password;
        }
        $user_details->save();
       if((sizeof($request->member_type))===(sizeof($request->member_name))&&(sizeof($request->member_email))===(sizeof($request->member_phone))){
        User::where('employe_id', auth()->id())->delete();
      

        foreach ($request->member_type as $key => $value) {
            $newuser=new User();
            $newuser->employe_id=auth()->id();
            $newuser->relation=$request->member_type[$key];
            $newuser->name=$request->member_name[$key];
            $newuser->email=$request->member_email[$key];
            $newuser->password=bcrypt('password');
            $newuser->phone_number=$request->member_phone[$key];
            $newuser->save();
        }
        return redirect()->back()->with(['success' => 'User profile details updated successfully']);
       }else{
        return redirect()->back()->with(['error' => 'All users all details are not filled']);

       }
       
    }
    public function deleteComment(Request $request,$cid,$userid){
        competition_comment::where('competition_id', $cid)->where('user_id', $userid)->delete();
        return redirect()->back()->with(['success' => 'User comment deleted successfully.']);
        return $userid;
    }
   
}
