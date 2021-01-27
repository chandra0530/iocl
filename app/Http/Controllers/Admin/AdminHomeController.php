<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Ushare;
use App\Models\User;
use App\Models\Compitition;
use App\Models\CompotitionUserUploads;
class AdminHomeController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $total_ushares=Ushare::where('ushare_status','active')->get()->count();
        $pending_ushares=Ushare::where('ushare_status','inactive')->get()->count();
        $total_users_list=User::where('status','active')->get()->count();
        $pending_users_list=User::where('status','inactive')->get()->count();
        $total_comp=Compitition::where('status','active')->get()->count();
        $comp_user_uploads=CompotitionUserUploads::where('status','submitted')->get()->count();
        
        if(auth('admin')->user()){
            return view('admin.home',compact('total_ushares','pending_ushares','total_users_list','pending_users_list','total_comp','comp_user_uploads'));
        }else{
            return view('admin.login');
        }
        
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
}
