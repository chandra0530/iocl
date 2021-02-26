<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
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
       

    $check=User::where('email',$request->email)->get();
    if(sizeof($check)>0){
        return redirect()->back()->with(['error' => 'Emailid is already registered.']);
    }
    $check=User::where('employeid',$request->employeid)->get();
    if(sizeof($check)>0){
        return redirect()->back()->with(['error' => 'Employid is already registered.']);
    }

    $data = array(
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$request->password,
    'employeid'=>$request->employeid);
    Mail::to($request->email)->send(new \App\Mail\NewUserRegistration($data));
      $user = new User();
      $user->name=$request->name; 
      $user->email=$request->email;
      if ($request->has('profile_image')) {
        $temp_url = $request->file('profile_image')->store('profile_image', 'public');
        $user->profile_image = url(Storage::url($temp_url));
    }
      $user->password=bcrypt($request->password);
      $user->employeid=$request->employeid;
      $user->status=$request->status;
      $user->save();
     
      return redirect()->back()->with(['success' => 'Your registration is under review and it would take max of 72 hours for you to access']);
    }
    public function logout()
    {
        Auth::logout();
        return view('user.login');
    }
    public function forgetpassword(Request $request){
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }
    public function forgetpasswordpage(){
        Auth::logout();
        return view('user.fpassword');
    }
    public function postReset(Request $request){
        return redirect()->back()->with(['success' => 'A link had been sent to the registered mail to reset the password.']);
        return $request;
    }
    public function resetpasswordPorm(Request $request){
        $token=$request->token;
        $email=$request->email;
        return view('user.resetpassword',compact('token','email'));
    }
    public function updatePassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
    
                $user->setRememberToken(Str::random(60));
    
                event(new PasswordReset($user));
            }
        );
        return $status == Password::PASSWORD_RESET
                ? redirect()->route('auth.login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
    }

    
}
