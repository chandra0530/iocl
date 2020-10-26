<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery_like;
use App\Models\gallery_comment;

class GalleryController extends Controller
{
    //
    public function addgalleryLike(Request $request){
        $like=new gallery_like();
        $like->user_id=1;
        $like->gallery_id=$request->gallery_id;
        $like->save();
        
    }
    public function deletegalleryLike(Request $request,$id){
        gallery_like::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function addgallerycomment(Request $request){
        $like=new gallery_comment();
        $like->gallery_id=$request->gallery_id;
        $like->user_id=1;
        $like->gallery_comment=$request->gallery_comment;
        $like->save();
        return redirect()->back();
    }
}
