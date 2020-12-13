<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\competition_like;
use App\Models\competition_comment;
use App\Models\CompotitionUserUploads;
use Illuminate\Support\Facades\Storage;

class CompetitionController extends Controller
{
    //
    public function addcompLike(Request $request,$userid,$compid){
        $like=new competition_like();
        $like->user_id=$userid;
        $like->competition_id=$compid;
        $like->save();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
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
        return redirect()->back()->with(['success' => 'New news added successfully.']);
    }
    public function publishreview(Request $request){
        $publish=new CompotitionUserUploads();
        $images=[];
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $key => $photo) {
                $path = $photo->store('comp_images', 'public');
                $image_url= url(Storage::url($path));
                array_push($images,$image_url);  
            }
        }
        $videos=[];
        if ($request->hasFile('videos')) {
            foreach ($request->videos as $key => $photo) {
                $path = $photo->store('comp_videos', 'public');
                $image_url= url(Storage::url($path));
                array_push($videos,$image_url);
            }
        }
        $publish->user_id=auth()->id();
        $publish->comp_id=$request->comp_id;
        $publish->compotition_images=json_encode($images);
        $publish->compotition_videos=json_encode($videos);
        $publish->compotition_details=$request->desc;
        $publish->status='submitted';
        $publish->save();
        return redirect()->back()->with(['success' => 'Compitition Details Submitted Successfully']);
    }
}
