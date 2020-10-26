<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnnouncementLike;
use App\Models\AnnouncementComment;

class AnnouncementController extends Controller
{
    //
    public function addannouncementLike(Request $request,$userid,$announcementid){
        $like=new AnnouncementLike();
        $like->user_id=$userid;
        $like->announcement_id=$announcementid;
        $like->save();
        return redirect()->back();
    }
    public function deleteannouncementLike(Request $request,$userid,$announcementid){
        AnnouncementLike::where('user_id', $userid)->where('announcement_id', $announcementid)->delete();
        return redirect()->back();
    }
    public function addannouncementcomment(Request $request){
        $like=new AnnouncementComment();
        $like->announcement_id=$request->announcement_id;
        $like->user_id=auth()->id();
        $like->announcement_coment=$request->announcement_coment;
        $like->save();
        return redirect()->back();
    }
}
