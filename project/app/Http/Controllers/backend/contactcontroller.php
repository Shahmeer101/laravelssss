<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contact(){

        return view('backend.pages-contact');
    }
}
