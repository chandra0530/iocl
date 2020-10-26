<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\competition_like;
use App\Models\competition_comment;
class CompetitionController extends Controller
{
    //
    public function addcompLike(Request $request){
        $like=new competition_like();
        $like->user_id=1;
        $like->competition_id=$request->competition_id;
        $like->save();
        
    }
    public function deletecompLike(Request $request,$id){
        competition_like::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addcompcomment(Request $request){
        $like=new competition_comment();
        $like->competition_id=$request->competition_id;
        $like->user_id=1;
        $like->competition_comment=$request->comment;
        $like->save();
        return redirect()->back();
    }
}
