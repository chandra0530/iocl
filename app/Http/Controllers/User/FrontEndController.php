<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryEvent;
use App\Models\Gallery;
use App\Models\gallery_like;
class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function showGallery(){
        $events=GalleryEvent::get();
        $userlikes=[];
        $eventpictures=Gallery::join('gallery_events','gallery_events.id','=','galleries.event_id')->select('gallery_events.gallery_event_name','gallery_events.slug','galleries.*')->WHERE('galleries.status','active')->get();
        for ($i=0; $i <sizeof($eventpictures); $i++) { 
           $temp=gallery_like::where('id',$eventpictures[$i]->id)->where('user_id',auth()->id())->get();
           if(sizeof($temp)){
            array_push($userlikes,true);
           }else{
            array_push($userlikes,false);
           }
        }
        // return $eventpictures;
        return view('user.gallery',compact('events','eventpictures','userlikes'));

    }
}
