<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\News;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::get();
        $left=[];
        $right=[];
        for ($i=0; $i <sizeof($news) ; $i++) { 
            if(($i%2)==0){
array_push($left,$news[$i]);
            }
            else{
                array_push($right,$news[$i]);
            }
            
        }
        return view('admin.news.index',compact('news','left','right'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news=new News();
        $news->heading=$request->news_heading;
        $news->news_short_description=$request->news_small_desc;
        $news->news_details=$request->desc;
        $news->news_status=$request->news_status;
        if ($request->has('photos')) {
            $temp_url = $request->file('photos')->store('news_photos', 'public');
            $news->images = url(Storage::url($temp_url));
        }
        $news->save();
        return redirect()->back()->with(['success' => 'New news added successfully.']);
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
        News::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'News deleted successfully.']);
    }
    public function active($id){
        $affected = News::where('id', 1)
              ->update(['news_status' => 'active']);
        return redirect()->back() ->with(['success' => 'News activated successfully.']);
    }
}
