<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DoctorController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cities = City::all();

        return view('backend.adddoctor', compact('categories', 'cities'));
    }


    public function viewdoctor()
    {
        $doctor = doctor::get();
        

        return view('backend.viewdoctor', compact( 'doctor'));
    }

    public function storeDoctor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'user_id' => 'required|integer|exists:users,id',

            // 'role' => 'required|integer', 
        ]);
    
        if ($validator->passes()) {
            $doctor = new doctor();
    
            $doctor->name = $request->name;
            $doctor->email = $request->email;
            $doctor->phone = $request->phone;
            $doctor->address = $request->address;
            $doctor->date_of_birth = $request->date_of_birth;
            $doctor->hire_date = $request->hire_date;
            $doctor->availability_time_start = $request->availability_time_start;
            $doctor->availability_time_end = $request->availability_time_end;
            $doctor->availability_week = $request->availability_week;
            $doctor->experience = $request->experience;
            $doctor->education = $request->education;
            $doctor->details = $request->details;
            $doctor->user_id = $request->user_id; 
            $doctor->city_id = $request->city_id; 
            $doctor->category_id = $request->category_id; 

                       
            // Handle Image Upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/'), $filename); // Save image to "public/uploads/profile_pictures"
                $doctor->profile_picture = 'uploads/' . $filename; // Store path in database
            }
    
            // $doctor->role_id = $request->role;
            $doctor->save();
    
            return redirect()->route('admin.doctor')->with('success', 'You have registered successfully.');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
    }

}
    
