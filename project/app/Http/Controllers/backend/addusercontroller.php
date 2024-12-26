<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\validator;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\role;
use Illuminate\Support\Facades\Hash;

class addusercontroller extends Controller
{

    public function form(){
        $roles = role::get();
        return view('backend.forms-layouts' , compact('roles'));
    }
    public function adduser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'role' => 'required|integer', // Validate role ID
        ]);
    
        if ($validator->passes()) {
            $user = new User();
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            
            // Handle Image Upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/'), $filename); // Save image to "public/uploads/profile_pictures"
                $user->profile_picture = 'uploads/' . $filename; // Store path in database
            }
    
            $user->role_id = $request->role;
            $user->save();
    
            return redirect()->route('admin.form')->with('success', 'You have registered successfully.');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
    }


public function viewuser(){

    $user = user::get();

    return view('backend.viewuser' , compact('user'));
}


public function edituser(int $user_id)
{
    $roles = role::get();
    $user = User::findorfail($user_id); 

    return view('backend.edituser', compact('user', 'roles'));
}

public function deleteuser(int $user_id)
{
 
    $user = User::findOrFail($user_id);
    $user->delete();
    return redirect()->back()->with('success', 'User deleted successfully!');
}


    
}
