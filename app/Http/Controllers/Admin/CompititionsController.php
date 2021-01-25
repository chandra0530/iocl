<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Compitition;
use App\Models\competition_comment;
use App\Models\CompotitionUserUploads;
class CompititionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions=Compitition::get();
        return view('admin.compititions.index',compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.compititions.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $images=[];
        $competition=new Compitition();
        $competition->competition_name=$request->competition_name;
        $competition->competition_details=$request->desc;
        $images=[];
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $key => $photo) {
                $path = $photo->store('event_images', 'public');
                $image_url= url(Storage::url($path));
                array_push($images,$image_url);
            }
        }
        $competition->competition_image=json_encode($images);
        $competition->compitition_location=$request->competition_location;
        $competition->event_from=$request->compitition_from;
        $competition->event_to=$request->compitition_to;
        $competition->event_type=$request->event_type;
        $competition->status=$request->status;

        $competition->save();
        return redirect()->back()->with(['success' => 'Competition added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competitions=Compitition::find($id);
        return view('admin.compititions.edit',compact('competitions'));
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
        $competition=Compitition::find($id);
        $competition->competition_name=$request->competition_name;
        $competition->competition_details=$request->desc;
        $images=[];
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $key => $photo) {
                $path = $photo->store('event_images', 'public');
                $image_url= url(Storage::url($path));
                array_push($images,$image_url);
            }
        }
        $competition->competition_image=json_encode($images);
        $competition->compitition_location=$request->competition_location;
        $competition->event_from=$request->compitition_from;
        $competition->event_to=$request->compitition_to;
        $competition->event_type=$request->event_type;

        $competition->save();
        return redirect()->back()->with(['success' => 'Competition updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compitition::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Compitition deleted successfully.']);
    }
    public function active($id){
        $affected = Compitition::where('id', $id)
              ->update(['status' => 'active']);
        return redirect()->back()->with(['success' => 'Compitition activated successfully.']);
    }
    public function uploadRequests(){
        $competitions=CompotitionUserUploads::join('compititions','compititions.id','=','compotition_user_uploads.comp_id')->select('compotition_user_uploads.*','compititions.competition_name as comp_name')->where('compotition_user_uploads.status','submitted')->get();
        // return $competitions;
        return view('admin.compititions.publishupdates',compact('competitions'));
        // return $uploads;
    }
    public function publish_request($id){
        $publishd_details=CompotitionUserUploads::find($id);
        $publishd_details->status='published';
        $publishd_details->save();
        return redirect()->back()->with(['success' => 'Details published successfully.']);
    }
    public function reject_request($id){
        CompotitionUserUploads::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Details rejected successfully.']);
    }

    public function comments_list($id){
        $comp_comments=competition_comment::join('users','users.id','=','competition_comments.user_id')->select('competition_comments.*','competition_comments.id as comp_id','users.*')->where('competition_comments.competition_id',$id)->get();
        return view('admin.compititions.comments',compact('comp_comments'));
    }
    public function comments_delete($id){
        competition_comment::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Compitition comment deleted successfully.']);
    }
}
