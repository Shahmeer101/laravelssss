<?php

namespace App\Http\Controllers\frantend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
        return view('frantend.index');
    }
}
