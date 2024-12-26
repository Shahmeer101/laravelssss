<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;
use Symfony\Contracts\Service\Attribute\Required;

class logincontroller extends Controller
{
    public function login(){

        return view('backend.pages-login');
        
        }

        public function store(Request $request)
{
   
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Please enter your email.',
        'password.required' => 'Please enter your password.',
        'email.email' => 'Please enter a valid email address.',
    ]);
    
    if ($validator->fails()) {
        return redirect()->route('admin.login')
            ->withErrors($validator)
            ->withInput(); 
    }
    
    if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Auth::user(); 
        // dd($user->name);
        if ($user->role_id === 1) {
           
            return redirect()->route('admin.home');
           
        } elseif ($user->role_id === 2) {
            return redirect()->route('doctor.home');
        }
    } else {
        return redirect()->route('admin.login')->with('error', 'Invalid email or password.');
    }
    
    
    return redirect()->route('admin.login')
        ->with('error', 'Invalid email or password.');
    
}

    public function logout(){

        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    
    }
  
    
}
