<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news_like;
use App\Models\news_comment;
class NewsUserController extends Controller
{
    //
    public function addNewsLike(Request $request){
        $like=new news_like();
        $like->user_id=1;
        $like->news_id=$request->news_id;
        $like->save();
        
    }
    public function deleteNewsLike(Request $request,$id){
        news_like::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addNewscomment(Request $request){
        $like=new news_comment();
        $like->news_id=$request->news_id;
        $like->user_id=1;
        $like->news_comment=$request->comment;
        $like->save();
        return redirect()->back();
    }
}
