<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use App\Models\Announcement;


class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements=Announcement::get();
        return view('admin.announcements.index',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announcements.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcement=new Announcement();
        $announcement->annoucemnt_name=$request->announcement_name;
        $announcement->announcement_details=$request->announcement_Desc;
        $announcement->status=$request->status;
        if ($request->has('photos')) {
            $temp_url = $request->file('photos')->store('announcement', 'public');
            $announcement->announcement_image = url(Storage::url($temp_url));
        }
        $announcement->save();
        return redirect()->back()->with(['success' => 'Announcement added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Announcement::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Announcement deleted successfully.']);
    }
    public function active($id){
        $affected = Announcement::where('id', $id)
              ->update(['status' => 'active']);
        return redirect()->back();
    }
}
