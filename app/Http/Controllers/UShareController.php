<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ushare;
use App\Models\UshareComment;
use App\Models\UshareLike;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\ushare_types;
class UShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$ushare_types=ushare_types::get();
        $posts=Ushare::Where('ushare_status','active')->join('users','users.id','=','ushares.user_id')->select('users.name as user_name','users.relation as relation_type','users.employe_id as employe_relation_id','ushares.*')->orderBy('ushares.id', 'desc')->paginate(10);
        // return $posts;
        $left=[];
        $right=[];
        for ($i=0; $i <sizeof($posts) ; $i++) { 
            if(($i%2)==0){
                array_push($left,$posts[$i]);
            }
            else{
                array_push($right,$posts[$i]);
            }
            
        }
        // return $posts;

        return view('user.ushare',compact('right','left','ushare_types','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images=[];
        $videos=[];
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $key => $photo) {
                $path = $photo->store('ushare', 'public');
                $image_url= url(Storage::url($path));
                array_push($images,$image_url);
            }
        }
        if ($request->hasFile('videos')) {
            foreach ($request->videos as $key => $photo) {
                $path = $photo->store('ushare', 'public');
                $image_url= url(Storage::url($path));
                array_push($videos,$image_url);
            }
        }
        $share=new Ushare();
        $share->user_id=auth()->id();
        $share->ushare_images=json_encode($images);
        $share->videos=json_encode($videos);
        $share->experience=$request->desc;
        $share->ushare_name=$request->share_name;
        $share->ushare_type=$request->ushare_type;

        $share->ushare_status=$request->ushare_status;
        $share->save();
        return redirect()->back()->with(['success' => 'Your share submitted successfully. Admin approval pending.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        Auth::guard('web');
        if(auth()->id()){
            $post_details=Ushare::find($id);
            $like_status=UshareLike::where('share_id',$id)->where('user_id',auth()->id())->get();
            $comments=UshareComment::where('share_id',$id)
            ->join('users','users.id','=','ushare_comments.user_id')
            ->get();
            $total_count = UshareLike::where('share_id',$id)->count();

            return view('user.ushare_details',compact('post_details','comments','like_status','total_count'));
        }else{
            return view('user.login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function comments_list($id){
        $comp_comments=UshareComment::join('users','users.id','=','ushare_comments.user_id')->select('ushare_comments.*','ushare_comments.id as ushare_comp_id','users.*')->where('ushare_comments.share_id',$id)->get();
        return view('admin.ushare.comments',compact('comp_comments'));
    }
    public function comments_delete($id){
        UshareComment::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Ushare comment deleted successfully.']);
    }
    public function deleteUshareComment(Request $request,$cid,$userid){
        UshareComment::where('share_id', $cid)->where('user_id', $userid)->delete();
        return redirect()->back()->with(['success' => 'User comment deleted successfully.']);
        // return $userid;
    }
}
