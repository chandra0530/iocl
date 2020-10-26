<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\competition_like;
use App\Models\competition_comment;
class CompetitionController extends Controller
{
    //
    public function addcompLike(Request $request,$userid,$compid){
        $like=new competition_like();
        $like->user_id=$userid;
        $like->competition_id=$compid;
        $like->save();
        return redirect()->back();
    }
    public function deletecompLike(Request $request,$userid,$compid){
        competition_like::where('user_id', $userid)->where('competition_id', $compid)->delete();
        return redirect()->back();
    }
    public function addcompcomment(Request $request){
        $like=new competition_comment();
        $like->competition_id=$request->competition_id;
        $like->user_id=auth()->id();
        $like->competition_comment=$request->comment;
        $like->save();
        return redirect()->back();
    }
}
