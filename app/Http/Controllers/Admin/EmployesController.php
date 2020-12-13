<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Ushare;
class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();

        return view('admin.employes.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employes.add');
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
        $user_Details=User::find($id);
        // return $user_Details;
        return view('admin.employes.edit',compact('user_Details'));
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
        User::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Employes deleted successfully.']);
    }


    public function active($id){
        $affected = User::where('id', $id)
        ->update(['status' => 'active']);
        return redirect()->back()->with(['success' => 'Employes account activated successfully.']);
    }
    public function postdestroy($id)
    {
        Ushare::where('id', $id)->delete();
        return redirect()->back()->with(['success' => 'Employes deleted successfully.']);
    }
    public function postactive($id){
        $affected = Ushare::where('id', $id)
        ->update(['ushare_status' => 'active']);
        return redirect()->back()->with(['success' => 'Employes account activated successfully.']);
    }
    public function posts(){
        $posts=Ushare::join('users','users.id','=','ushares.user_id')->select('users.name as user_name','ushares.*')->get();
        return view('admin.ushare.index',compact('posts'));
    }
    public function updateemployepassword(Request $request){
        $user = User::find($request->user_id);
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->back()->with(['success' => 'Employes password updated successfully.']);
    }
}
