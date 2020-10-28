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
        return redirect()->back()->with(['error' => 'Account not yet activated.']);
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
      $user->status=$request->status;
      $user->save();

      return redirect()->back()->with(['success' => 'Your account had been registered successfully.']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
