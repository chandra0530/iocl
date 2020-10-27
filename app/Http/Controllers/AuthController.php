<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    //
    public function login(Request $request){

      if (Auth::guard('web')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
        //Authentication passed...
        $userdetails=User::find(auth()->id());
        if($userdetails->status=='active'){
            return redirect()->route('home');
        }else{
            Auth::logout();
        return redirect()->back();
        }
        // return "login successful";
        //
    }
    else {
        return "login failed";
        // return redirect()->back();
    }

        return $request;
    }
    public function signup(Request $request){
      $user = new User();
      $user->name=$request->name; 
      $user->email=$request->email;
      $user->password=bcrypt($request->password);
      $user->employeid=$request->employeid;
      $user->save();

      return redirect()->back()->with(['success' => 'Event pictures added successfully.']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
