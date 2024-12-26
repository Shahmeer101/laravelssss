<?php

namespace App\Http\Controllers\frantend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    

    public function login(){
        return view('frantend.login');
    }
}
