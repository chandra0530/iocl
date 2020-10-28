<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news_like;
use App\Models\news_comment;
class NewsUserController extends Controller
{
    //
    public function addNewsLike(Request $request,$user_id,$newsid){
        // echo json_encode(['user_id'=>$user_id,'newsid'=>$newsid]);
        $like=new news_like();
        $like->user_id=$user_id;
        $like->news_id=$newsid;
        $like->save();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
    }
    public function deleteNewsLike(Request $request,$user_id,$newsid){
        // echo json_encode(['user_id'=>$user_id,'newsid'=>$newsid]);
        news_like::where('user_id', $user_id)->where('news_id', $newsid)->delete();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
        // return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addNewscomment(Request $request){
        $like=new news_comment();
        $like->news_id=$request->news_id;
        $like->user_id=auth()->id();
        $like->news_comment=$request->comment;
        $like->save();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
    }
}
