<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;
// use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

class rolecontroller extends Controller
{
   
    public function role(){
        return view('backend.addrole');
    }

    public function addrole(Request $request)
    {
      
        $validatedData = $request->validate([
            'role_id' => 'required|integer',
            'role_name' => 'required|string'
        ]);
    
        $role = Role::create([
            'role_id' => $validatedData['role_id'],
            'role_type' => $validatedData['role_name']
        ]);
    
      
        return view('backend.addrole');
    }

}
