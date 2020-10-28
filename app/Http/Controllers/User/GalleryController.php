<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery_like;
use App\Models\gallery_comment;

class GalleryController extends Controller
{
    //
    public function addgalleryLike(Request $request,$userid,$galleryid){
        $like=new gallery_like();
        $like->user_id=$userid;
        $like->gallery_id=$galleryid;
        $like->save();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
    }
    public function deletegalleryLike(Request $request,$userid,$galleryid){
        gallery_like::where('user_id', $userid)->where('gallery_id', $galleryid)->delete();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
    }
    public function addgallerycomment(Request $request){
        $like=new gallery_comment();
        $like->gallery_id=$request->gallery_id;
        $like->user_id=auth()->id();
        $like->gallery_comment=$request->gallery_comment;
        $like->save();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
    }
}
