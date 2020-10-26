<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryEvent;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
class GalleryEventPicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.addgalleryeventpictures');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events=GalleryEvent::get();
        $eventpictures=Gallery::join('gallery_events','gallery_events.id','=','galleries.event_id')->select('gallery_events.gallery_event_name','galleries.*')->get();
        // return $eventpictures;

        return view('admin.gallery.addgalleryeventpictures',compact('events','eventpictures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=new Gallery();
        $gallery->event_id=$request->event_id;
       
        if ($request->has('gallery_image')) {
            $temp_url = $request->file('gallery_image')->store('gallery_image', 'public');
            $gallery->image = url(Storage::url($temp_url));
        }
        $gallery->save();
        return redirect()->back()->with(['success' => 'Event pictures added successfully.']);
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
        //
    }
    public function active($id){
        $affected = Gallery::where('id', $id)
              ->update(['status' => 'active']);
        return redirect()->back();
    }
}
