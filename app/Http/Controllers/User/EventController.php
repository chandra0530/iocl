<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event_comment;
use App\Models\event_like;
class EventController extends Controller
{
    public function addEventsLike(Request $request){
        $like=new event_like();
        $like->user_id=1;
        $like->news_id=$request->news_id;
        $like->save(); 
        
    }
    public function deleteEventsLike(Request $request,$id){
        event_like::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addEventscomment(Request $request){
        $like=new event_comment();
        $like->event_id=$request->event_id;
        $like->user_id=1;
        $like->event_comment=$request->comment;
        $like->save();
        return redirect()->back();
    }
}
