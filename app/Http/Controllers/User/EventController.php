<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event_comment;
use App\Models\event_like;
class EventController extends Controller
{
    public function addEventsLike(Request $request,$userid,$eventid){
        $like=new event_like();
        $like->user_id=$userid;
        $like->event_id=$eventid;
        $like->save(); 
        return redirect()->back();
    }
    public function deleteEventsLike(Request $request,$userid,$eventid){
        event_like::where('user_id', $userid)->where('event_id', $eventid)->delete();
        return redirect()->back();
    }
    public function addEventscomment(Request $request){
        $like=new event_comment();
        $like->event_id=$request->event_id;
        $like->user_id=auth()->id();
        $like->event_comment=$request->comment;
        $like->save();
        return redirect()->back();
    }
}
