<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\city;
use Illuminate\Http\Request;
use Illuminate\support\Facades\db;

class citycontroller extends Controller
{
    //

  public function index(){
    return view('backend.addcity');
  }


  public function addcity(Request $request)
    {
      
        $validatedData = $request->validate([
         
            'city_name' => 'required|string'
        ]);
    
        $city = city::create([
          
            'city_naame' => $validatedData['city_name']
        ]);
    
      
        return view('backend.addcity');
    }

    public function viewcity(){

          $city = city::get();
          return view('backend.viewcity' , compact('city'));


    }


}
