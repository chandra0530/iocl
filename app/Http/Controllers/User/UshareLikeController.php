<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UshareLike;
use App\Models\UshareComment;
class UshareLikeController extends Controller
{
    public function addUshareLike(Request $request,$user_id,$newsid){
        // echo json_encode(['user_id'=>$user_id,'newsid'=>$newsid]);
        $like=new UshareLike();
        $like->user_id=$user_id;
        $like->share_id=$newsid;
        $like->save();
        return redirect()->back()->with(['success' => 'New like added successfully.']);
    }
    public function deleteUshareLike(Request $request,$user_id,$newsid){
        // echo json_encode(['user_id'=>$user_id,'newsid'=>$newsid]);
        UshareLike::where('user_id', $user_id)->where('share_id', $newsid)->delete();
        return redirect()->back()->with(['success' => 'Your like has been removed']);
        // return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addUsharecomment(Request $request){
        $like=new UshareComment();
        $like->share_id=$request->ushare_id;
        $like->user_id=auth()->id();
        $like->ushare_comment=$request->comment;
        $like->save();
        return redirect()->back()->with(['success' => 'New comment added successfully.']);
    }
}
