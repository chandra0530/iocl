<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');
    }

    
    public function login(Request $request)
    {

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
          
            return redirect()
                ->intended(route('admin.home'))
                ->with('status', 'You are Logged in as Admin!');
        }
        
        return $this->logout();
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->with('status', 'Admin has been logged out!');
    }
}
