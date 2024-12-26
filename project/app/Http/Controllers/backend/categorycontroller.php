<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class categorycontroller extends Controller
{
    //

    public function index(){

    return view('backend.addcategory');
    }


    public function addCategory(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'c_name' => 'required|string|max:255',
            'c_desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create a new category
        $category = new Category();
        $category->category_name = $request->input('c_name');
        $category->category_desc = $request->input('c_desc');
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/categories'), $filename);
            $category->category_image = 'uploads/categories/' . $filename; // Save path in 'category_image' column
        }
    
        
        $category->save();
    
      
        return redirect()->route('admin.category')->with('success', 'Category added successfully!');
    }
    
    public function viewcategory(){
        $category =  category::get();
        return view('backend.viewcategory' , compact('category'));
    }



    public function deletecategory(int $category_id){


        $category =  category::findorfail($category_id);
        $category->delete();
        return redirect()->back(); 
 

    }

}    