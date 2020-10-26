<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnnouncementLike;
use App\Models\AnnouncementComment;

class AnnouncementController extends Controller
{
    //
    public function addannouncementLike(Request $request){
        $like=new AnnouncementLike();
        $like->user_id=1;
        $like->announcement_id=$request->announcement_id;
        $like->save();
        
    }
    public function deleteannouncementLike(Request $request,$id){
        AnnouncementLike::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addannouncementcomment(Request $request){
        $like=new AnnouncementComment();
        $like->announcement_id=$request->announcement_id;
        $like->user_id=1;
        $like->announcement_coment=$request->announcement_coment;
        $like->save();
        return redirect()->back();
    }
}
